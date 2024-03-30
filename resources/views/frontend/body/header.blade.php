<header class="header-area">
			<div class="header-top second-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 d-none d-lg-block">
                        </div>
                        <div class="col-lg-4 col-md-8 d-none  d-md-block">
                            <div class="header-cta">
                                <ul>

                                        <i class="icon dripicons-mail p-1"></i>
                                        <span class="email pr-1" ></span>


                                        <i class="icon dripicons-phone "></i>
                                        <span class="phone"></span>

                                </ul>
                            </div>
                        </div>
                         <div class="col-lg-5 col-md-3 d-none d-lg-block">
                             <div class="header-social text-right">
                            <span>
                                <a href="#" id="facebook" title="Facebook"><i class="fab fa-facebook"></i></a>
                                <a href="#" id="twitter" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" id="linkedIn" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
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
                                 <a href="{{route('get.appointment')}}" class="top-btn">Appointment<i class="fas fa-chevron-right"></i></a>

                            </div>
                             <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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

       $.ajax({
        url:"https://dr.sobrokom.store/api/doctor/sociallink/1",
        type:'GET',
        success:function(res){
   //console.log(res)
            var facebook = res.socialIcon.facebook;
            var twitter = res.socialIcon.twitter;
            var linkedIn = res.socialIcon.linkdin;
            $('#facebook').attr('href',facebook);
            $('#twitter').attr('href',twitter);
            $('#linkedIn').attr('href',linkedIn);
        }
       });
    })

</script>
