@extends('frontend.master')
@section('body')
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Services List</h2>                                    
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Services</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="services-area services-bg services-two pt-100"  style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg02.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-xl-8 col-lg-8">
                           <div class="section-title text-center pl-40 pr-40 mb-80" >
                               <span> our all services</span>
                               <h2>Our Special Services For You</h2>
                               <p class="mt-10">Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                           </div>
                       </div>
                   </div>
                   <div class="row sr-line service">
                       
                          
                   </div>
                   
               </div>
           </section>
           <script>
      $(document).ready(function(){
        $.ajax({
            url:"https://dr.sobrokom.store/api/doctor/home-service/1",
            type:"GET",
            success:function(res){    
                var service ="";
               $.each(res.allserviceInfo, function(key, value){ 
                var allServiceName = value.name.length > 20 ? value.name.substring(0, 20) + "..." : value.name;
                var allServiceDesc = value.description.length > 50 ? value.description.substring(0, 50) + "..." : value.description;
             console.log(allServiceDesc);
             service +=`<div class="col-lg-4 col-md-12">
                           <div class="s-single-services text-center active" >
                               <div class="services-icon">
                                   <img src="https://dr.sobrokom.store/uploads/service_image/${value.service_image}" alt="img">
                               </div>
                               <div class="second-services-content">
                                   <h5><a>${allServiceName}</a></h5>       
                                   <p>${allServiceDesc}</p>
                               </div>
                               
                           </div>

                         </div>`
                 $(".service").html(service)
               });
            }
        });
        });

</script>
<!-- Some problem for data description show and backend image show problem -->
@endsection