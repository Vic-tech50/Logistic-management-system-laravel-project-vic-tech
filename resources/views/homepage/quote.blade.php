@extends('layouts.main')
@section('content')

    <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row justify-content-end">
                <!-- Contact wrapper -->
                <div class="col-xl-8 col-lg-9"> 
                    <div class="contact-form-wrapper">
                        <!-- From tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-50">
                                    <span>Get a Qote For Free</span>
                                    <h2>Request a Free Quote</h2>
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for.</p>
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form action="/save" method="post" class="contact-form" >
                        	@csrf
                            <div class="row ">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Name" name="name" value="{{old('name')}}">
                                         @error('name')
                                       <span class="w3-text-red w3-small" style="margin-top: 0px;" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Email" name="email" value="{{old('email')}}">
                                         @error('email')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" placeholder="Contact Number" name="number" value="{{old('number')}}">
                                         @error('number')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="select-items">
                                        <select  id="select1" name="freight">
                                            <option value="">Freight Type</option>
                                            <!-- <option>{{old('freight')}}</option> -->
                                            <option value="Air">Air</option>
                                            <option value="Land">Land</option>
                                            <option value="Sea">Sea</option>
                                            
                                        </select>

                                         @error('freight')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="City of Departure" name="departure" value="{{old('departure')}}">
                                         @error('departure')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Package Type" name="type" value="{{old('type')}}">
                                         @error('type')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Weight(KG)" name="weight" value="{{old('weight')}}">
                                         @error('weight')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                              
                                <div class="">
                                    <button name="submit" class="submit-btn">Request a Quote</button>
                                </div>
                            </div>
                        </form>	
                    </div>
                </div>`
            </div>
        </div>
    </section><br><br><br><br><br><br>


@endsection