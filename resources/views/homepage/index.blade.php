@extends('layouts.main')
@section('content')

<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="hero__caption">
                                <h1 >Safe & Reliable <span>Logistic</span> Solutions!</h1>
                            </div>
                            <!--Hero form -->

                           
                            <form action="/tracking_details" method="post" class="search-box">
                            	@csrf
                                <div class="input-form">
                                    <input type="text" placeholder="Your Tracking ID" name="tracking_code">
                                </div>
                                <div class="search-form">
                                    <button class="w3-btn w3-red"  style="height: 60px;">Track & Trace</button>
                                </div>	
                            </form>	
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- slider Area End-->
    <!--? our info Start -->
    <div class="our-info-area pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="info-caption">
                            <p>Call Us Anytime</p>
                            <span>+15618771318</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-clock"></span>
                        </div>
                        <div class="info-caption">
                            <p>Sunday CLOSED</p>
                            <span>Mon - Sat 8.00 - 18.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-place"></span>
                        </div>
                        <div class="info-caption">
                            <p>Florida</p>
                            <span>Winter Haven - 33881 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our info End -->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Our Services</span>
                        <h2>What We Can Do For You</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-shipped"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Land Transport</a></h5>
                            <p>Our land transport services offer efficient, reliable, and flexible solutions for all your logistics needs. With extensive coverage, timely delivery, and advanced tracking, we ensure your cargo reaches its destination safely and on time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-ship"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Ship Transport</a></h5>
                            <p>Our ship transport services provide efficient and reliable solutions for your global shipping needs. With extensive routes, timely deliveries, and advanced tracking, we ensure your cargo reaches its destination safely and on schedule.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-plane"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Air Transport</a></h5>
                            <p>Our air transport services offer fast, reliable, and efficient solutions for your urgent shipping needs. With global coverage, timely deliveries, and advanced tracking, we ensure your cargo reaches its destination quickly and safely.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Area End -->
    <!--? About Area Start -->
    <div class="about-low-area padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>About Our Company</span>
                            <h2>Safe Logistic & Transport  Solutions That Saves our Valuable Time!</h2>
                        </div>
                        <p>
Sky Centers is a leading shipping company providing top-tier air, land, and sea logistics solutions. With global reach, reliable service, and custom solutions, we ensure your cargo reaches its destination efficiently and securely.</p>
                        <p>Our advanced tracking and dedicated customer support offer a seamless and hassle-free shipping experience. Trust Sky Centers for all your shipping needs.</p>
                        <a href="/about" class="btn">More About Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img">
                            <img src="assets/img/gallery/about2.png" alt="">
                        </div>
                        <div class="about-back-img d-none d-lg-block">
                            <img src="assets/img/gallery/about1.html" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
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
                                    <span>Get a Quote For Free</span>
                                    <h2>Request a Free Quote</h2>
                                  
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form class="contact-form" id="myForm">
                        	@csrf
                            <div class="row ">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Name" id="name" name="name" value="{{old('name')}}">
                                         @error('name')
                                       <span class="w3-text-red w3-small" style="margin-top: 0px;" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Email" id="email" name="email" value="{{old('email')}}">
                                         @error('email')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" placeholder="Contact Number" id="number" name="number" value="{{old('number')}}">
                                         @error('number')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="select-items">
                                        <select   name="freight" id="freight">
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
                                        <input type="text" id="departure" placeholder="City of Departure" name="departure" value="{{old('departure')}}">
                                         @error('departure')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="text" id="type" placeholder="Package Type" name="type" value="{{old('type')}}">
                                         @error('type')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="text" id="weight" placeholder="Weight(KG)" name="weight" value="{{old('weight')}}">
                                         @error('weight')
                                       <span class=" w3-text-red w3-small" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror  
                                    </div>
                                </div>
                              
                                <div class="">
                                    <button id="submit" onclick="submitForm()" class="submit-btn">Request a Quote</button>
                                </div>
                            </div>
                        </form>	
                    </div>
                </div>`
            </div>
        </div>
    </section><br><br><br><br><br><br>
    <!-- contact-form end -->
  
    <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding section-bg" data-background="assets/img/gallery/section_bg04.jpg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-25">
                        <span>Clients Testimonials</span>
                        <h2>What Our Clients Say!</h2>
                    </div> 
                    <div class="h1-testimonial-active mb-70">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>"Sky Centers has been our trusted shipping partner for years. Their reliable service and timely deliveries have significantly improved our supply chain efficiency. Highly recommended!"</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jhaon smith</span>
                                        <p>Creative designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>
"The team at Sky Centers always goes above and beyond to meet our needs. Their advanced tracking system gives us peace of mind, knowing exactly where our shipments are at all times."</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/team1.png" alt="" style="width: 70px; height: 70px; border-radius: 50%;">
                                    </div>
                                    <div class="founder-text">
                                        <span>Emma L.</span>
                                        <p>Interior designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                          <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>

"We switched to Sky Centers for their exceptional customer support. They tailored their services to fit our specific requirements, making our logistics operations smoother and more efficient."</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/team3.png" alt="" style="width: 70px; height: 70px; border-radius: 50%;" class="img-circle">
                                    </div>
                                    <div class="founder-text">
                                        <span>Michael T.</span>
                                        <p>Engineer</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Form Start -->
                <div class="col-xl-4 col-lg-5 col-md-8">
                    <div class="testimonial-form text-center">
                        <h3>Always listening, always understanding.</h3>
                        <input type="text" placeholder="Incoterms">
                        <button name="submit" class="">Request a Quote</button>
                    </div>
                </div>
                <!-- Form End -->
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
   
</main>





@endsection