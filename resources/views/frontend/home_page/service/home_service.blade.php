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

</script>
