<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Mecare – Hospital and Health HTML Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/img/favicon.ico">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Place favicon.ico in the root Internist, General Practitonery -->

		<!-- CSS here -->
        <script src="{{asset('frontend')}}/js/vendor/jquery-1.12.4.min.js"></script>
        <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/dripicons.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/default.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/meanmenu.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    </head>
    <body>
        <!-- header -->
       @include('frontend.body.header')
        <!-- header-end -->
        <!-- main-area -->
        <main>

           @yield('body')

        </main>
        <!-- main-area-end -->
        <!-- footer -->

        <!-- footer-end -->
        @include('frontend.body.footer')

		<!-- JS here -->
        	<!-- JS here -->
        <script src="{{asset('frontend')}}/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="{{asset('frontend')}}/js/popper.min.js"></script>
        <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/js/one-page-nav-min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.meanmenu.min.js"></script>
        <script src="{{asset('frontend')}}/js/slick.min.js"></script>
        <script src="{{asset('frontend')}}/js/ajax-form.js"></script>
        <script src="{{asset('frontend')}}/js/paroller.js"></script>
        <script src="{{asset('frontend')}}/js/wow.min.js"></script>
        <script src="{{asset('frontend')}}/js/js_isotope.pkgd.min.js"></script>
        <script src="{{asset('frontend')}}/js/imagesloaded.min.js"></script>
        <script src="{{asset('frontend')}}/js/parallax.min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.waypoints.min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.counterup.min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.scrollUp.min.js"></script>
        <script src="{{asset('frontend')}}/js/parallax-scroll.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('frontend')}}/js/element-in-view.js"></script>
        <script src="{{asset('frontend')}}/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if(Session::has('message'))
            toastr.options =
            {
              "closeButton" : true,
              "progressBar" : true
            }
                  toastr.success("{{ session('message') }}");
            @endif

            @if(Session::has('error'))
            toastr.options =
            {
              "closeButton" : true,
              "progressBar" : true
            }
            @endif
            $(document).ready(function(){
        const btn = document.querySelector('.messagebtn');
        btn.addEventListener('click', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let msgname = document.querySelector('#msgname').value;
        let msgemail = document.querySelector('#msgemail').value;
        let msgphone = document.querySelector('#msgphone').value;
        let msgmessage = document.querySelector('#msgmessage').value;
        let dr_id = document.querySelector('#msgdr_id').value;
        $.ajax({
            url: "https://dr.sobrokom.store/api/patien/message/store",
            type: 'POST',
            data_type: 'json',
            data: {
                'name': msgname,
                'email': msgemail,
                'phone': msgphone,
                'message': msgmessage,
                'dr_id': dr_id,
            },
            success: function(success_response) {
                if (success_response.status == 200) {
                    toastr.success(success_response.message);
                    document.querySelector('#msgname').value = '';
                    document.querySelector('#msgphone').value = '';
                    document.querySelector('#msgemail').value = '';
                    document.querySelector('#msgmessage').value = '';
                    document.querySelector('#dr_id').value = '';
                } else {
                    toastr.warning(success_response.error.email);
                }
            }
        });
    });
    });
            $(document).ready(function(){
        $.ajax({
            url:"https://dr.sobrokom.store/api/doctor/home-service/1",
            type:"GET",
            success:function(res){
                var service ="";
               $.each(res.serviceInfo, function(key, value){
             //console.log(value.name);
             service +=`<div class="col-lg-4 col-md-12">
                           <div class="s-single-services text-center active" >
                               <div class="services-icon">
                                   <img src="https://dr.sobrokom.store/uploads/service_image/${value.service_image}" alt="img">
                               </div>
                               <div class="second-services-content">
                                   <h5><a href="#" value="${value.id}" class="serviceDetail">${value.name}</a></h5>
                                   <p>${value.description}</p>
                               </div>

                           </div>

                         </div>`
                 $(".service").html(service)
               });
            }
        });
        });
        $(document).ready(function(){
        $(document).on('click', '.serviceDetail', function(e) {
            e.preventDefault();
            var id = $(this).attr('value');
            $.ajax({
                url:"https://dr.sobrokom.store/api/service/details/"+id,
                type:'GET',
                dataType:"json",
                success:function(res){
                //console.log(res.singleserviceDetails.name);
                document.querySelector('#dr_id').value= res.singleserviceDetails.dr_id,
                document.querySelector('#name').value= res.singleserviceDetails.name,
                document.querySelector('#description').value= res.singleserviceDetails.description,
                document.querySelector('#price').value= res.singleserviceDetails.price,
                document.querySelector('#service_image').value= res.singleserviceDetails.service_image,
                document.querySelector('#created_at').value= res.singleserviceDetails.created_at,
                $("#serviceDetailsForm").submit();
                }
            });
        });
    });

          </script>
    </body>
</html>
