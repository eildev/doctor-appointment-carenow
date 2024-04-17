
<section id="testimonios" class="testimonial-area testimonial-p pt-50 pb-85 fix" style="background-image: url({{asset('frontend')}}/img/an-bg/an-bg07.png);background-position: center; background-repeat: no-repeat;background-size: contain;" >
               <div class="container">
                     <div class="row justify-content-center">

                       <div class="col-lg-8">
                    <div class="section-title center-align mb-60 text-center">
                               <span>TESTIMONIAL</span>
                               <h2>What Our Client’s Say’s</h2>
                              <p>Explore the Compelling Testimonials and Heartfelt Stories Shared by Our Esteemed Clients, Illuminating Their Journeys of Healing and Success with Our Dedicated Services</p>
                           </div>
                           </div>
                           </div>

                  <div class="row justify-content-center">

                  <div class="col-lg-10">
                            <div class="testimonial-active">

                                @for($i = 0; $i < count($datas); $i++)
                                <div class="single-testimonial">
                                     <div class="testi-img">
                                        @php $image = "https://dr.sobrokom.store/uploads/testimonial/".$datas[$i]['image']; @endphp
                                        <img height="120" src="{{ $image }}" alt="img">
                                    </div>
                                    <div class="single-testimonial-bg">

								    <div class="com-icon"><img src="{{ asset('frontend') }}/img/testimonial/qutation.png" alt="img"></div>
                                        <div class="testi-author">
                                                     <div class="ta-info">
                                            <h6>{{$datas[$i]['name']}}</h6>
                                            <span>{{$datas[$i]['other_name']}}</span>

                                        </div>
                                    </div>
                                    <p>{{ $datas[$i]['description'] }}</p>
                                        </div>

                                </div>
                                @endfor

                            </div>
                        </div>

                   </div>
               </div>
           </section>
