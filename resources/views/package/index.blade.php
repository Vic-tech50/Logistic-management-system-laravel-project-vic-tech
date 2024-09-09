<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Package
        </h2>
    </x-slot>


    <div class="py-12">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        	<a href=" {{ route('package.create')}}"> <button class="w3-button w3-round w3-card-8 w3-xlarge w3-black" style="width: 40px;">&#8889;</button></a>
        	<br><br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                	
                	<div class="w3-responsive">
            <table cellpadding="0" cellspacing="0" border="0" class=" w3-table w3-border w3-hoverable w3-striped w3-center" id="tab">
            <thead>
              <tr>
                <th>#</th>
                <th>Tracking ID</th>
                <th>Date</th>
                <th>Reciever Name</th>
                <th>Reciever Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            	@foreach($package as $package)
              <tr>
                <td class="w3-left">{{$loop->iteration}}</td>
                <td>{{$package->tracking_id}}</td>
                <td>{{$package->created_at}}</td>
                <td>{{$package->reciever_name}}</td>
                <td>{{$package->reciever_email}}</td>
                <td>
                	<div class="w3-row"> 
                		<div class="w3-half">
                	<a href="{{ route('package.edit',$package->id) }}"> <button class="w3-button w3-round w3-card-8 w3-large w3-black" style="width: 0px;font-size: 2px" title="Edit"><i class="fa fa-edit w3-text-green"></i></button></a>
                </div>
                <div class="w3-half">

                	  <form action="{{ route('package.destroy',$package->id) }}" method="Post">
@csrf
@method('DELETE')
 <button class="w3-button w3-round w3-card-8 w3-large w3-black" style="width: 0px;" title="Delete"><i class="fa fa-times w3-text-red"></i></button>

</form>
</div>
                </div>
                </td>
              </tr>
              @endforeach
            
            </tbody>
          </table>
      </div>

                </div>
            </div>
        </div>
    </div>

  

</x-app-layout>
