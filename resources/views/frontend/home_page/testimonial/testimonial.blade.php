
<section id="testimonios" class="testimonial-area testimonial-p pt-50 pb-85 fix" style="background-image: url({{asset('frontend')}}/img/an-bg/an-bg07.png);background-position: center; background-repeat: no-repeat;background-size: contain;" >
               <div class="container">
                     <div class="row justify-content-center">
                       
                       <div class="col-lg-8"> 
                    <div class="section-title center-align mb-60 text-center">
                               <span>TESTIMONIAL</span>
                               <h2>What Our Client’s Say’s</h2>
                              <p>Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                           </div>
                           </div>
                           </div>
                   
                  <div class="row justify-content-center">
                       
                       <div class="col-lg-10 ">                           
                           <div class="testimonial-active  testimonial">
      
                           </div>
                       </div>
                       
                   </div>
               </div>
           </section>

           <script>
      $(document).ready(function(){
        $.ajax({
            url:"https://dr.sobrokom.store/api/doctor/testimonial/1",
            type:"GET",
            success:function(res){    
                var testimonial ="";
               $.each(res.testimonial, function(key, value){ 
           //  console.log(value.name);
              testimonial +=`
                         <div class="single-testimonial">
                                    <div class="testi-img">
                                       <img src="https://dr.sobrokom.store/uploads/testimonial/${value.image}" height="120px" width="120px"alt="img">                                        
                                   </div>
                                   <div class="single-testimonial-bg">
                                   <div class="com-icon"><img src="{{asset('frontend')}}/img/testimonial/qutation.png" alt="img"></div>
                                       <div class="testi-author">
                                                    <div class="ta-info">                                          
                                           <h6>${value.name}</h6>
                                           <span>${value.name}</span>
                                           
                                       </div>
                                   </div>
                                   <p>${value.description}</p>
                                       </div>
                                  
                               </div>`
              $(".testimonial").html(testimonial)
               });
            }
        });
        });
     
</script>