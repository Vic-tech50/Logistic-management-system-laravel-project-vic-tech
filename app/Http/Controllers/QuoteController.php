<?php

namespace App\Http\Controllers;
use App\Models\Package;
use App\Models\Quote;
use Str;

use Illuminate\Http\Request;
use McKenziearts\Notify\Facades\Notify;

class QuoteController extends Controller
{



    public function save(Request $request)
    {

       

             $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required|numeric',
            'freight' => 'required',
            'departure' => 'required',
            'weight' => 'required|numeric',
            'type' => 'required',
         
        
            ]);

 
            $quote = new Quote;
            $quote->name = Str::ucfirst($request->name);
            $quote->number = $request->number;
            $quote->email = $request->email;
            $quote->freight = $request->freight;
            $quote->departure = $request->departure;
            $quote->weight = $request->weight;
            $quote->type = $request->type;
            
            $quote->save();
            
            return back();
    }
  public function store(Request $request)
    {
      try {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:255',
            'freight' => 'required|string|max:255',
            'departure' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'weight' => 'required|string|max:255',
        ]);

        Quote::create($validatedData);

        return response()->json(['success' => true]);

    } catch (\Exception $e) {
        return response()->json(['errors' => [$e->getMessage()]], 500);
    }
    }


     public function track(Request $request)
    {
         $query = $request->input('tracking_code');

         if($pack = Package::where('tracking_id',$query)->first()){
        
        return view('homepage.track', [
                 'pack'=>$pack
        ]);
    }else{
         notify()->error('Not Found');
           return back();
    
    }
    }

        public function trackapp(Request $request)
    {
        $query = $request->input('tracking_code');

        $pack = Package::where('tracking_id', $query)->first();

        if ($pack) {
            return response()->json([
                'status' => 'success',
                'data' => $pack
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Not Found'
            ], 404);
        }
    }


    



}
