
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
                       
                  <div class="col-lg-10">                           
                            <div class="testimonial-active">
                                
                                @foreach($testimonials as $testimonial)
                                <div class="single-testimonial">
                                     <div class="testi-img">
                                        <img src="img/testimonial/testimonial-img.png" alt="img">                                        
                                    </div>
                                    <div class="single-testimonial-bg">
								    <div class="com-icon"><img src="img/testimonial/qutation.png" alt="img"></div>
                                        <div class="testi-author">
                                                     <div class="ta-info">                                          
                                            <h6>{{$testimonial[0]['name']}}</h6>
                                            <span>{{$testimonial[0]['other_name']}}</span>
                                            
                                        </div>
                                    </div>
                                    <p>{{ $testimonial[0]['description'] }}</p>
                                        </div>
                                   
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                       
                   </div>
               </div>
           </section>
