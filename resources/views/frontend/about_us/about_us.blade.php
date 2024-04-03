@extends('frontend.master')
@section('body')
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{asset('frontend')}}/img/testimonial/test-bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>About Us</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
     </section>
            <!-- breadcrumb-area-end -->
				<!-- about-area -->
              @include('frontend.home_page.about.about_us')
            <!-- about-area-end -->

			<!-- counter-area -->
            <div class="counter-area pt-100 mb-100" style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg04.png); background-repeat: no-repeat; background-size: contain; ">
                <div class="container">
                    <div class="row align-items-end">
                         <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="single-counter text-center" >
							 <img src="{{asset('frontend')}}/img/icon/cunt-icon01.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">500</span><small>+</small>
                                </div>
                                <p>Doctors At Work</p>
                            </div>
                        </div>
                      <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								<img src="{{asset('frontend')}}/img/icon/cunt-icon02.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">58796</span><small>+</small>
                                </div>
                                <p>Happy Patients</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								 <img src="img/icon/cunt-icon03.png" alt="img">
                                <div class="counter p-relative">
                                   <span class="count">500</span><small>+</small>
                                </div>
                                <p>Medical Beds</p>
                            </div>
                        </div>
                         <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								 <img src="{{asset('frontend')}}/img/icon/cunt-icon04.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">200</span><small>+</small>
                                </div>
                                <p>Winning Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->
			  <!-- newslater-area -->
            @include('frontend.home_page.news_letter.news_letter')
            <!-- newslater-aread-end -->
            <!-- testimonial-area -->
           

            <!-- testimonial-area-end -->
             <!-- brand-area -->
            <div class="brand-area" style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg12.png); background-size: cover;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2"> x cv
                            <div class="single-brand">
                                <img src="{{asset('frontend')}}/img/brand/c-logo.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand active">
                                  <img src="{{asset('frontend')}}/img/brand/c-logo02.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="{{asset('frontend')}}/img/brand/c-logo03.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="{{asset('frontend')}}/img/brand/c-logo04.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="{{asset('frontend')}}/img/brand/c-logo.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
