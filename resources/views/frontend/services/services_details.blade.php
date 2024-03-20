@extends('frontend.master')
@section('body')

<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Services Details</h2>                                    
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Services Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
			<!-- choose-area -->
            <section class="choose-area pt-100 pb-50 p-relative">             
                <div class="chosse-img wow fadeInRight animated" data-animation="fadeInRight animated" data-delay=".2s"></div>
                <div class="container">
                    <div class="row">
                        <!-- rightside -->
               <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                  <div class="service-detail">
                        <div class="images-box row">                          
                            <div class="column col-lg-12 col-md-12 col-sm-8 wow fadeInLeft">
                                <figure class="image wow fadeIn"><a href="img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="img/blog/inner_b1.jpg" alt=""></a></figure>
                            </div>

                            
                        </div>

                        <div class="content-box">
                            <h2>{{$name}}</h2>
                            <p>Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
    
                         </div>
                   
               </div> 
               <!-- rightside --> 
              
            </div>
					
                </div>
            </section>
@endsection