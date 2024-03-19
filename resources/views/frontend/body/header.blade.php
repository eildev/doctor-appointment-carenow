<header class="header-area">  
			<div class="header-top second-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 d-none d-lg-block">
                        </div>                       
                        <div class="col-lg-4 col-md-8 d-none  d-md-block">
                            <div class="header-cta">
                                <ul>                                   
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                        <span>info@example.com</span>
                                    </li>
                                     <li>
                                        <i class="icon dripicons-phone"></i>
                                        <span>+8 12 3456897</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-lg-5 col-md-3 d-none d-lg-block">
                             <div class="header-social text-right">
                            <span>
                                <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>                               
                               </span>                    
                               <!--  /social media icon redux -->                               
                        </div>
                        </div>
                         
                    </div>
                </div>
            </div>		
            <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="{{asset('frontend')}}/img/logo/logo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">                               
                                <div class="main-menu text-right pr-15">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-sub">
												<a href="{{url('/')}}">Home</a>
												
											</li>
                                            <li><a href="{{route('about.page')}}">About Us</a></li>
                                            <li class="has-sub">
                                                <a href="{{route('all.services')}}">Services</a>
                                            </li>                                                                                     
											     
											<li class="has-sub"> 
                                                <a href="{{route('all.blog')}}">Blog</a>
                                            </li>               
											<li class="has-sub"> 
                                                <a href="{{route('contact.us')}}">Contact Us</a>
                                            </li>               
                                        </ul>
                                    </nav>
                                </div>
                            </div>    
                             <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                                 <a href="{{route('get.appointment')}}" class="top-btn">Get Appointment<i class="fas fa-chevron-right"></i></a>
                                 
                            </div>
                             <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>