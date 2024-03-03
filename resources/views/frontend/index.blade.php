@extends('frontend.master')
@section('body')
  <!-- slider-area -->
   @include('frontend.home_page.home_slider.slider')
           <!-- slider-area-end -->
           <!-- booking-area -->
           @include('frontend.home_page.booking.booking')
           
           <!-- booking-area-end -->
           
            <!-- services-area -->
            @include('frontend.home_page.service.home_service')
           <!-- services-area-end -->
           
           <!-- about-area -->
           @include('frontend.home_page.about.about_us')
           <!-- about-area-end -->
           
           <!-- counter-area -->
           @include('frontend.home_page.counter.counter')
           <!-- counter-area-end -->	
          
           <!-- department-area -->
           @include('frontend.home_page.department.department')
           <!-- department-area-end -->			
            <!-- team-area-->
            @include('frontend.home_page.team.team')
           <!-- team-area-end -->
           <!-- newslater-area -->
           @include('frontend.home_page.news_letter.news_letter')
           <!-- newslater-aread-end -->
           <!-- testimonial-area -->
           @include('frontend.home_page.testimonial.testimonial')
           <!-- testimonial-area-end -->
           <!-- pricing-area -->
           @include('frontend.home_page.price.price')
            <!-- pricing-area-end -->
            <!-- counter-area -->
            <div class="call-area pb-50" style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg09.png); background-repeat: no-repeat; background-position: bottom;">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="single-counter-img fadeInUp animated" >
								 <img src="{{asset('frontend')}}/img/bg/ap-illustration.png" alt="img" class="img">
                            </div>
                        </div>
                      <div class="col-lg-5 col-md-12 col-sm-12">                                                     
                            <div class="section-title mt-100">
                                <span>APPOINTMENT</span>
                                <h2>Make An Appointment For Emergency</h2>
                            </div>
                          
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12">    
                            <div class="slider-btn mt-130">                                          
                                <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Appointment <i class="fas fa-chevron-right"></i></a>					
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- blog-area -->
             @include('frontend.home_page.blog.blog')
            <!-- blog-area-end -->
			
            <!-- contact-area -->
            @include('frontend.home_page.contact.contact')
            <!-- contact-area-end -->
			 <!-- brand-area -->
            <div class="brand-area" style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg12.png); background-size: cover;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
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
            <!-- brand-area-end -->
@endsection