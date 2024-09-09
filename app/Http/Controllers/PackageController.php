<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Package;
use App\Models\Quote;

use Str;
use App\Mail\PackageCreated;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use McKenziearts\Notify\Facades\Notify;


class PackageController extends Controller
{

             public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $package = Package::latest()->get();
        return view('package.index', ['package'=>$package]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $track_id = 'SL'.rand(000000, 999999).'SH';

             $request->validate([
            'sender_name' => 'required',
            'sender_number' => 'required|numeric',
            'sender_email' => 'required',
            'sender_address' => 'required',
            'reciever_name' => 'required',
            'reciever_number' => 'required|numeric',
            'reciever_email' => 'required',
            'reciever_address' => 'required',
            'country' => 'required',
            'package_type' => 'required',
            'package_weight' => 'required|numeric',
            'shipment_method' => 'required',
            'status' => 'required',
            'current_location' => 'required',
        
            ]);


            $package = new Package;
            $package->sender_name = Str::ucfirst($request->sender_name);
            $package->sender_phone = $request->sender_number;
            $package->sender_email = $request->sender_email;
            $package->sender_address = Str::ucfirst($request->sender_address);
            $package->reciever_name = Str::ucfirst($request->reciever_name);
            $package->reciever_phone = $request->reciever_number;
            $package->reciever_email = $request->reciever_email;
            $package->reciever_address = Str::ucfirst($request->reciever_address);
            $package->country = $request->country;
            $package->package_type = Str::ucfirst($request->package_type);
            $package->package_weight = $request->package_weight;
            $package->shipment_method = $request->shipment_method;
            $package->status = $request->status;
            $package->comment = strip_tags($request->comment);
            $package->current_location = Str::ucfirst($request->current_location);
            $package->tracking_id = $track_id;
            $package->save();
             Mail::to($request->reciever_email)->send(new PackageCreated($package)); 
             notify()->success('package has been created successfully.');
            return redirect()->route('package.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(package $package)
    {
        return view('package.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
             $request->validate([
            'sender_name' => 'required',
            'sender_number' => 'required|numeric',
            'sender_email' => 'required',
            'sender_address' => 'required',
            'reciever_name' => 'required',
            'reciever_number' => 'required|numeric',
            'reciever_email' => 'required',
            'reciever_address' => 'required',
            'country' => 'required',
            'package_type' => 'required',
            'package_weight' => 'required|numeric',
            'shipment_method' => 'required',
            'status' => 'required',
            'current_location' => 'required',
        
            ]);


            $package = Package::find($id);
            $package->sender_name = Str::ucfirst($request->sender_name);
            $package->sender_phone = $request->sender_number;
            $package->sender_email = $request->sender_email;
            $package->sender_address = Str::ucfirst($request->sender_address);
            $package->reciever_name = Str::ucfirst($request->reciever_name);
            $package->reciever_phone = $request->reciever_number;
            $package->reciever_email = $request->reciever_email;
            $package->reciever_address = Str::ucfirst($request->reciever_address);
            $package->country = $request->country;
            $package->package_type = Str::ucfirst($request->package_type);
            $package->package_weight = $request->package_weight;
            $package->shipment_method = $request->shipment_method;
            $package->status = $request->status;
            $package->comment = strip_tags($request->comment);
            $package->current_location = Str::ucfirst($request->current_location);
            
            $package->save();
            notify()->success('package has been updated successfully.');
            return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(package $package)
    {
        $package->delete();
        notify()->error('Package has been deleted successfully');
return redirect()->route('package.index');
    }


    public function quote(){
         $quote = Quote::latest()->get();
        return view('admin.quote_list', ['quote'=>$quote]);
    }

    public function delete_quote(Request $request)
    {
        $id = Quote::find($request->id);
        $id->delete();
        notify()->error('Quote has been deleted');
        return back();



    }
}
