<footer class="footer-bg footer-p" >
            <div class="overly"><img src="{{asset('frontend')}}/img/an-bg/footer-bg.png" alt="rest"></div>
            <div class="footer-top pb-30" style="background-color: #ECF1FA;">
                <div class="container">
                    <div class="row justify-content-between">
                        
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="flog mb-35">
                                    <a href="#"><img src="{{asset('frontend')}}/img/logo/logo.png" alt="logo"></a>
                                </div>
                                <div class="footer-text mb-20">
                                    <p>Sed ut perspiciatis unde om is nerror sit voluptatem accustium dolorem tium totam rem aperam eaque ipsa quae ab illose
                                    inntore veritatis</p>
                                </div>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        
						<div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Our Links</h5>
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Partners</a></li>
										<li><a href="{{route('about.page')}}"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Career</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Reviews</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Terms & Conditions</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Other Links</h5>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="{{url('/')}}"><i class="fas fa-chevron-right"></i> Home</a></li>
                                        <li><a href="{{route('about.page')}}"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                        <li><a href="{{route('all.services')}}"><i class="fas fa-chevron-right"></i> Services</a></li>
                                        <li><a href="{{route('all.blog')}}"><i class="fas fa-chevron-right"></i> Blog</a></li>
                                        <li><a href="{{route('contact.us')}}"><i class="fas fa-chevron-right"></i> Contact</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Contact Us</h5>
                                </div>
                                <div class="footer-link">
                                    <div class="f-contact">
                                    <ul>
                                    <li>
                                        <i class="icon dripicons-phone "></i>
                                        <span class="phone"></span>
                                    </li>
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                         <span class="email"><a href="#" ></a></span>
                                    </li>
                                    <li>
                                      <i class="fal fa-map-marker-alt"></i>
                                         <span class="address"></span>
                                    </li>
                                </ul>
                                    
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>&copy; 2020 Mecare  All design Zcube.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
      $(document).ready(function(){
        $.ajax({
            url:"https://dr.sobrokom.store/api/doctor/contact-info/1",
            type:"GET",
            success:function(res){    
                $('.phone').text(res.ContactInfo.phone); 
                $('.email').text(res.ContactInfo.email); 
                $('.address').text(res.ContactInfo.address); 
            }
        });

        // $.ajax({
        //     url:"https://dr.sobrokom.store/api/doctor/social/link/1",
        //     type:"GET",
        //     success:function(res){    
        //         $('.phone').text(res.ContactInfo.phone); 
        //         $('.email').text(res.ContactInfo.email); 
        //         $('.address').text(res.ContactInfo.address); 
        //     }
        // });
        });
     
</script>