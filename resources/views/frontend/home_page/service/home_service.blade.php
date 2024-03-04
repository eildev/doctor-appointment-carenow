<section id="services" class="services-area services-bg services-two pt-100"  style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg02.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-xl-8 col-lg-8">
                           <div class="section-title text-center pl-40 pr-40 mb-80" >
                               <span> our services</span>
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
               $.each(res.serviceInfo, function(key, value){ 
             //console.log(value.name);
             service +=`<div class="col-lg-4 col-md-12">
                           <div class="s-single-services text-center active" >
                               <div class="services-icon">
                                   <img src="https://dr.sobrokom.store/uploads/service_image/${value.service_image}" alt="img">
                               </div>
                               <div class="second-services-content">
                                   <h5><a>${value.name}</a></h5>       
                                   <p>${value.description}</p>
                               </div>
                               
                           </div>

                         </div>`
                 $(".service").html(service)
               });
            }
        });
        });

</script>