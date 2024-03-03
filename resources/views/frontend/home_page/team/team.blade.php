<section id="team" class="pb-20" style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg13.png); background-size: contain;background-position: center center;background-repeat: no-repeat;">
             
             <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-xl-8 col-lg-8">
                         <div class="section-title text-center mb-70">
                              <span> OUR TEAM </span>                               
                             <h2>Docter’s In The Medical Sciences</h2>
                             <p>Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                         </div>
                     </div>
                 </div>
                 <div class="row team-active drInfo">     

                     
                      
                   
             </div>
         </section>
         
         <script>
         $(document).ready(function() {
       $.ajax({
        url:"https://dr.sobrokom.store/api/doctor/dr_info/1",
        type:'GET',
        success:function(res){
            console.log(res.);
            let drInfo ="";
            $.each(res.drInfo, function( key, value){
                 console.log(value.name);
                // console.log(value.long_caption);
              
            });
            $('.drInfo').html(drInfo);
        }
       });
    })
</script>
