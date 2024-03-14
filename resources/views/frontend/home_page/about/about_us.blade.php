<style>

</style>
<section id="about" class="about-area about-p pt-65 pb-80 p-relative" style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
               <div class="container">
                   <div class="row align-items-center">					
                     <div class="col-lg-6 col-md-12 col-sm-12">
                           <div class="s-about-img  p-relative">
                               <!-- <img src="{{asset('frontend')}}/img/bg/illlustration.png" alt="img"> -->
                               <img src="" alt="img" class="about_us_image" height="613px" width="944px">
                           </div>
                       </div>
                       <div class="col-lg-6 col-md-12 col-sm-12">
                           <div class="about-content s-about-content pl-30">
                               <div class="section-title mb-20">
                                   <span>About Us</span>
                                   <h2 class="title"></h2>                                  
                               </div>
                               <p class="description"></p>
                               
                               <ul>
                                       <li>
                                           <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                           <div class="text">Pellentesque placerat, nisi congue vehicula efficitur.
                                           </div>
                                       </li>
                                       <li>
                                           <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                           <div class="text">Pellentesque placerat, nisi congue vehicula efficitur.
                                           </div>
                                       </li>
                                       <li>
                                           <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                           <div class="text">Phasellus mattis vitae magna in suscipit. Nam tristique posuere sem, mattis molestie est bibendum.
                                           </div>
                                       </li>
                                   <div></div>
                               </ul>
                              
                              <div class="slider-btn mt-30">                                          
                                           <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>					
                                       </div>
                           </div>
                       </div>
                       
                   </div>
               </div>
</section>


           
           <script>
    $(document).ready(function(){
      $.ajax({
        url:"https://dr.sobrokom.store/api/doctor/about/1",
        type:'GET',
        success:function(res){
          //console.log(res);
          $src ="https://dr.sobrokom.store/uploads/about_us/"
          $('.about_us_image').attr('src',$src+res.aboutUs.image);
          $('.title').text(res.aboutUs.title); 
          $('.description').html(res.aboutUs.description); 
        }
      });
    });
</script>