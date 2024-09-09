@extends('layouts.main')
@section('content')


     <main>
     
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section-padding">
         <div class="container">

         	<h3 class = "w3-text-black">Tracking details</h3>
         	<p>Tracking ID: {{$pack->tracking_id}} | <i>Date: {{$pack->created_at}}</i></p>
         	<p></p>
            <div class="row">
             
               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                  
                     
                     <div class="single_sidebar_widget popular_post_widget ">
                        <h3 class="widget_title w3-text-red w3-bolder">Sender Details</h3>
                        <div class="media post_item">
                          
                           <div class="media-body">
                              
                                 <h3 class = "w3-text-black"><i class="fa fa-user w3-large"></i> &nbsp;&nbsp;<b>Sender Name:</b> {{$pack->sender_name}}</h3>
                             
                             
                           </div>
                        </div>
                        <div class="media post_item">
                          
                           <div class="media-body">
                             <h3 class = "w3-text-black"><i class="fa fa-phone w3-large"></i> &nbsp;&nbsp;<b>Sender Phone: </b>{{$pack->sender_phone}}</h3>
                             
                              <p></p>
                           </div>
                        </div>
                       
                     </div>
                 
                  </div>
               </div>


                <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                  
                     
                     <div class="single_sidebar_widget popular_post_widget ">
                        <h3 class="widget_title w3-text-red w3-bolder" >Reciever Details</h3>
                        <div class="media post_item">
                          <div class="media-body">
                             <h3 class = "w3-text-black"><i class="fa fa-user w3-large"></i> &nbsp;&nbsp;<b>Full Name: </b>{{$pack->reciever_name}}</h3>
                             
                             
                           </div>
                        </div>
                        <div class="media post_item">
                           <div class="media-body">
                             <h3 class = "w3-text-black"><i class="fa fa-phone w3-large"></i> &nbsp;&nbsp;<b>Phone Number: </b>{{$pack->reciever_phone}}</h3>
                             
                             
                           </div>
                        </div>
                        <div class="media post_item">
                          
                         <div class="media-body">
                             <h3 class = "w3-text-black"><i class="fa fa-envelope w3-large"></i> &nbsp;&nbsp;<b>Email: </b>{{$pack->reciever_email}}</h3>
                             
                             
                           </div>
                        </div>
                        <div class="media post_item">
                          <div class="media-body">
                             <h3 class = "w3-text-black"><i class="fa  fa-map-marker w3-large"></i> &nbsp;&nbsp;<b>Address: </b>{{$pack->reciever_address}}, {{$pack->country}}</h3>
                             
                             
                           </div>
                        </div>
                     </div>
                 
                  </div>
               </div>

                <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                  
                     
                     <div class="single_sidebar_widget popular_post_widget ">
                        <h3 class="widget_title w3-text-red w3-bolder">Package Details</h3>
                        <div class="media post_item">
                           <div class="media-body">
                             <h3 class = "w3-text-black"><i class="fa  fa-angle-double-right w3-large"></i> &nbsp;&nbsp;<b>Package Type: </b>{{$pack->package_type}}</h3>
                             
                             
                           </div>
                        </div>
                        <div class="media post_item">
                           <div class="media-body">
                             <h3 class = "w3-text-black"><i class="fa  fa-angle-double-right w3-large"></i> &nbsp;&nbsp;<b>Package Weight: </b>{{$pack->package_weight}}KG</h3>
                             
                             
                           </div>
                        </div>
                        <div class="media post_item">
                          <div class="media-body">
                             <h3 class = "w3-text-black"><i class="fa  fa-angle-double-right w3-large"></i> &nbsp;&nbsp;<b>Shipment Method: </b>{{$pack->shipment_method}}</h3>
                             
                             
                           </div>
                        </div>
                        <div class="media post_item">
                          <div class="media-body">
                             <h3 class = "w3-text-black"><i class="fa  fa-angle-double-right w3-large"></i> &nbsp;&nbsp;<b>Status: </b>{{$pack->status}}</h3>
                             
                             
                           </div>
                        </div>
                     </div>
                 
                  </div>
               </div>


                  <div class="col-lg-12">
                  <div class="blog_right_sidebar">
                  
                     
                     <div class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title w3-text-red w3-bolder" >Other Details</h3>
                        <div class="media post_item">
                            <div class="media-body">
                             <h3 class = "w3-text-black"><i class="fa  fa-map-marker w3-large"></i> &nbsp;&nbsp;<b>Current Location: </b>{{$pack->current_location}}</h3>
                             
                             
                           </div>
                        </div>
                        <div class="media post_item">
                            <div class="media-body">
                            	@if($pack->comment)
                             <h3 class = "w3-text-black"><i class="fa  fa-comment w3-large"></i> &nbsp;&nbsp;<b>Comment: </b>{{$pack->comment}}</h3>
                             @else
                              <h3 class = "w3-text-black"><i class="fa  fa-comment w3-large"></i> &nbsp;&nbsp;<b>Comment: </b>No Comment Yet</h3>
                             
                             @endif
                           </div>
                       
                     </div>
                 
                  </div>
               </div>


            </div>
         </div>
      </section>
      <!--================ Blog Area end =================-->

   </main>



@endsection