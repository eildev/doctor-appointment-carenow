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
          //  console.log(res.drInfo);
            let drInfo ="";
            $.each(res.drInfo, function( key, value){
               // console.log(value.dr_image);
                
              drInfo +=    `<div class="col-xl-4 ">
                         <div class="single-team mb-30" >
                             <div class="team-thumb">
                                 <div class="brd">
                                      <img height="300px" width="300" src="https://dr.sobrokom.store/uploads/dr_image/${value.dr_image}" alt="img">
                                 </div>
                                 
                                 <div class="dropdown">
                                   <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     +
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                     <div class="team-social mt-15">
                                     <ul>
                                         <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                         <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                     </ul>       
                                 </div>
                                   </div>
                                 </div>
                                 
                                 
                             </div>
                             <div class="team-info">
                                 <h4>${value.name}</h4>
                                 <span>Internist, General Practitoner</span>
                                 <p>Working Since 2004</p>
                             </div>
                         </div>
                     </div>
                     </div>
            `
            });
           $('.drInfo').html(drInfo);
        }
       });
    })
</script>
