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
           <form id="serviceDetailsForm" method="POST" action="{{ url('/service/details') }}">
            @csrf <!-- CSRF protection -->

            <!-- Hidden input fields to store data -->
            <input type="hidden" name="dr_id" id="dr_id">
            <input type="hidden" name="name" id="name">
            <input type="hidden" name="description" id="description">
            <input type="hidden" name="price" id="price">
            <input type="hidden" name="service_image" id="service_image">
            <input type="hidden" name="created_at" id="created_at">
        </form>
</div>
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
            
             service +=`<div class="col-lg-4 col-md-12">
                           <div class="s-single-services text-center active" >
                               <div class="services-icon">
                                   <img src="https://dr.sobrokom.store/uploads/service_image/${value.service_image}" alt="img">
                               </div>
                               <div class="second-services-content">
                                   <h5><a href="#"  value="${value.id}" class="serviceDetail">${allServiceName}</a></h5>       
                                   <p>${allServiceDesc}</p>
                               </div>
                               
                           </div>

                         </div>`
                 $(".service").html(service)
               });

       
            }
        });
        });

        $(document).ready(function() {
        $(document).on('click', '.serviceDetail', function(e) {
            e.preventDefault();
            var id = $(this).attr('value');
            $.ajax({
                url:"https://dr.sobrokom.store/api/service/details/"+id,
                type:'GET',
                dataType:"json",
                success:function(res){        
                console.log(res.serviceDetails.title);
                document.querySelector('#dr_id').value= res.serviceDetails.dr_id,
                document.querySelector('#name').value= res.serviceDetails.user_id,
                document.querySelector('#description').value= res.serviceDetails.title,
                document.querySelector('#price').value= res.serviceDetails.desc,
                document.querySelector('#service_image').value= res.serviceDetails.tags,
                document.querySelector('#created_at').value= res.serviceDetails.image,
                $("#serviceDetailsForm").submit();
                }
            });
        });
    });
</script>
<!-- Some problem for data description show and backend image show problem -->
@endsection