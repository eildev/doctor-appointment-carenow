@extends('frontend.master')
@section('body')
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Blog Details</h2>                                   
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- inner-blog -->
            <section class="inner-blog b-details-p pt-100 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-details-wrap">
							<div class="bsingle__post-thumb mb-30">
                                    <img src="img/blog/inner_b1.jpg" alt="">
                                </div>
                                <div class="meta__info">
                                    <ul>
                                        <li><a href="#">  <i class="far fa-calendar-alt"></i>  7 March, 2019</a></li>
                                            <li><a href="#"><i class="far fa-user"></i>by Zcube</a></li>
                                            <li><i class="far fa-comments"></i>35 Comments</li>
                                    </ul>
                                </div>
                                <div class="details__content pb-50">
                                <h3><a href="#">A series of iOS 7 inspire
                                                            vector icons.</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or
                                                        incididunt ut labore et dolore.</p>
                                </div>
                                
                                <div class="related__post mt-45 mb-85">
                                    <div class="post-title">
                                        <h4>Related Post</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="related-post-wrap mb-30">
                                                <div class="post-thumb">
                                                    <img src="img/blog/b_details03.jpg" alt="">
                                                </div>
                                                <div class="rp__content">
                                                    <h3><a href="#">A series of iOS 7 inspire
                                                            vector icons.</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or
                                                        incididunt ut labore et dolore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="related-post-wrap mb-30">
                                                <div class="post-thumb">
                                                    <img src="img/blog/b_details04.jpg" alt="">
                                                </div>
                                                <div class="rp__content">
                                                    <h3><a href="#">Sed ut perspiciatis unde omnis.</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or
                                                        incididunt ut labore et dolore.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
   
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside>
                                <div class="widget mb-40">
                                    <div class="widget-title text-center">
                                        <h4>Feeds</h4>
                                    </div>
                                    <div class="widget__post">
                                        <ul>
                                            <li>
                                                <div class="widget__post-thumb">
                                                    <img src="img/blog/aside/post_01.jpg" alt="">
                                                </div>
                                                <div class="widget__post-content">
                                                    <h6><a href="#">Alonso kelina falao asiano pero</a></h6>
                                                    <span><i class="far fa-clock"></i>1 Hours ago</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget__post-thumb">
                                                    <img src="img/blog/aside/post_02.jpg" alt="">
                                                </div>
                                                <div class="widget__post-content">
                                                    <h6><a href="#">It is a long established fact that a reader</a></h6>
                                                    <span><i class="far fa-clock"></i>3 Hours ago</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget__post-thumb">
                                                    <img src="img/blog/aside/post_03.jpg" alt="">
                                                </div>
                                                <div class="widget__post-content">
                                                    <h6><a href="#">Many desktop publish packages and web</a></h6>
                                                    <span><i class="far fa-clock"></i>5 Hours ago</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget__post-thumb">
                                                    <img src="img/blog/aside/post_04.jpg" alt="">
                                                </div>
                                                <div class="widget__post-content">
                                                    <h6><a href="#">Various versions have evolved over the years</a></h6>
                                                    <span><i class="far fa-clock"></i>6 Hours ago</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget__post-thumb">
                                                    <img src="img/blog/aside/post_05.jpg" alt="">
                                                </div>
                                                <div class="widget__post-content">
                                                    <h6><a href="#">Photo booth anim 8-bit PBR 3 wolf moon.</a></h6>
                                                    <span><i class="far fa-clock"></i>8 Hours ago</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                                            
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <script>
//     $(document).ready(function(){
//       $.ajax({
//         url:"/blog-details/{id}",
//         type:'GET',
//         success:function(res){
//           console.log(res);
//         //   $src ="https://dr.sobrokom.store/uploads/about_us/"
//         //  $('.about_us_image').attr('src',$src+res.aboutUs.image);
//         //   $('.title').text(res.aboutUs.title); 
//         //   $('.description').html(res.aboutUs.description); 
//         }
//       });
//     });
// </script>
@endsection