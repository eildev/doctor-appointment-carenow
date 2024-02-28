@extends('frontend.master')
@section('body')
<div id="site-content" class="site-content clearfix">
    <div id="inner-content" class="inner-content-wrap">
        <div class="page-content">

            <!-- SLIDER -->
            @include('frontend.body.slider')
            <!--/intro-top-->
            <section class="fl-row intro-top">                            
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="box-intro-top">
                                <div class="box-features-intro">
                                    <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>
                                    <div class="features-intro-top wow fadeInDown">
                                        <img src="{{asset('frontend')}}/assets/image/common/MaskGroup9.png" alt="image">
                                        <div class="features-inner">
                                            <img src="{{asset('frontend')}}/assets/image/pattern/Path18193.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="20" data-smobile="20"></div>
                                </div>
                                <div class="box-content-intro">
                                    <div class="themesflat-spacer clearfix" data-desktop="87" data-mobile="70" data-smobile="50"></div>
                                    <h3 class="heading">
                                        WHAT WE DO
                                    </h3>
                                    <div class="title-heading wow fadeInUp">
                                        True Healthcare For<br> Your Family
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15" data-smobile="15"></div>
                                    <div class="row-content-intro wow fadeInUp">
                                        <div class="cl-content-intro">
                                            <div class="box-icon">
                                                <i class="icon-Path-18154 font-size-big"></i>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="28" data-smobile="28"></div>
                                            <h3><a href="services.html">Quality Control System</a></h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                            </p>
                                        </div>
                                        <div class="cl-content-intro">
                                            <div class="box-icon">
                                                <i class="icon-Path-18158 font-size-big"></i>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="28" data-smobile="28"></div>
                                            <h3><a href="services.html">Highly Professional Staff</a></h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                            </p>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="45" data-smobile="20"></div>
                                    <div class="box-button">
                                        <a href="book-appointment.html" class="themesflat-button bg-accent btn-header"><span>Get Appointment</span></a>
                                    </div> 
                                    <div class="themesflat-spacer clearfix" data-desktop="78" data-mobile="70" data-smobile="50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/intro-middl-->
            <section class="fl-row intro-middle">
                <div class="container">
                    <div class="row">
                        <div class="themesflat-spacer clearfix" data-desktop="150" data-mobile="70" data-smobile="70"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-heading-intro">
                                <h3 class="heading wow fadeInDown">
                                    WHAT WE DO
                                </h3>
                                <div class="title-heading wow fadeInDown">
                                    Providing Medical Care For The <br> Sickest In Our Community.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="box-item wow fadeInUp">
                                <div class="img">
                                    <img src="{{asset('frontend')}}/assets/image/common/intro01.jpg" alt="image">
                                </div>
                                <div class="box-wrap">
                                    <div class="title">
                                        <a href="service-details.html">Cosmetic Dentistry</a>
                                    </div>
                                    <p class="pdt-10 text-color-title-sidebar">
                                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog MTV quiz graced
                                    </p>
                                    <div class="flat-read-more">
                                        <a href="service-details.html" class="themesflat-button font-default small">
                                            <span>Read More<i class="fa fa-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="box-item wow fadeInUp"  data-wow-delay="100ms">
                                <div class="img">
                                    <img src="{{asset('frontend')}}/assets/image/common/intro02.jpg" alt="image">
                                </div>
                                <div class="box-wrap">
                                    <div class="title">
                                        <a href="service-details.html">Pediatric Dentistry</a>
                                    </div>
                                    <p class="pdt-10 text-color-title-sidebar">
                                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog MTV quiz graced
                                    </p>
                                    <div class="flat-read-more">
                                        <a href="service-details.html" class="themesflat-button font-default small">
                                            <span>Read More<i class="fa fa-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="box-item wow fadeInUp" data-wow-delay="200ms">
                                <div class="img">
                                    <img src="{{asset('frontend')}}/assets/image/common/intro03.jpg" alt="image">
                                </div>
                                <div class="box-wrap">
                                    <div class="title">
                                        <a href="service-details.html">Dental Implants</a>
                                    </div>
                                    <p class="pdt-10 text-color-title-sidebar">
                                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog MTV quiz graced
                                    </p>
                                    <div class="flat-read-more">
                                        <a href="service-details.html" class="themesflat-button font-default small">
                                            <span>Read More<i class="fa fa-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="50" data-smobile="30"></div>
                    </div>
                </div>
            </section>
             <!--/features-->
             @include('frontend.body.features')
            <!--/our-team-->
            @include('frontend.body.our_team_doctor')
            <!--/portfolio-->
            @include('frontend.body.portfolio')
            <!--/counter-->
           @include('frontend.body.counter')
            <!--/process-->
            @include('frontend.body.work_process')
            <!--/map/contact-us-->
            @include('frontend.body.contact_map')
            <!--/articles-->
            @include('frontend.body.articles')
            
        </div>
        <!--.page-content-->
    </div>
    <!--#inner-content-->
</div> 
@endsection