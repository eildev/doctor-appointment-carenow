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
               <form id="serviceDetailsForm" method="POST" action="{{ url('/service/details') }}">
                @csrf
               <input type="hidden" name="dr_id" id="dr_id">
               <input type="hidden" name="name" id="name">
               <input type="hidden" name="description" id="description">
               <input type="hidden" name="price" id="price">
               <input type="hidden" name="service_image" id="service_image">
               <input type="hidden" name="created_at" id="created_at">
               </form>
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
