<section id="home" class="slider-area fix p-relative">
<div class="slider-active2 SliderData">
<div class="single-slider slider-bg d-flex align-items-center" style="background-image:url({{asset('frontend')}}/img/an-bg/header-bg.png)">
        <div class="container">
        <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="slider-content s-slider-content text-left">
                        <h2 data-animation="fadeInUp" data-delay=".4s" class="short_caption"></span></h2>
                        <p data-animation="fadeInUp" class="long_caption" data-delay=".6s"></p>
                        <div class="slider-btn mt-25">                                          
                            <a href="" class="btn ss-btn slider_links" data-animation="fadeInRight" data-delay=".8s">Learn More <i class="fas fa-chevron-right"></i></a>					
                           
                            </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="" alt="header-img" class="header-img slider_image"/>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script>
    $(document).ready(function() {
       $.ajax({
        url:"https://dr.sobrokom.store/api/doctor/home-slider/1",
        type:'GET',
        success:function(res){
     //    console.log(res.sliderInfo.slider_image);
            $src = "https://dr.sobrokom.store/uploads/slider_image/"
            var href = res.sliderInfo.slider_links; 
            $('.slider_image').attr('src',$src+res.sliderInfo.slider_image);      
            $('.short_caption').text(res.sliderInfo.short_caption);          
            $('.long_caption').text(res.sliderInfo.long_caption);          
            $('.slider_links').attr('href',href);          
        }
       });
    })
</script>