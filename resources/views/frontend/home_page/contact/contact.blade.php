<section id="contact" class="contact-area contact-bg pb-70 p-relative fix" style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg11.png); background-size: cover;background-repeat: no-repeat; ">
                <div class="container">
             
					<div class="row">
                        <div class="col-lg-6">
                            <div class="contact-img">
                                <img src="{{asset('frontend')}}/img/bg/touch-illustration.png" alt="touch-illustration">
                            </div>
                        </div>
						<div class="col-lg-6">
                        <div class="section-title mb-60" >
                                <span>Contact</span>
                                <h2>Get In Touch With Us</h2>
                            </div>
						<form action="#" class="contact-form" >
                            @csrf
							<div class="row">
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="text" name="name" placeholder="Write here your Name" required>
                                </div>                               
                            </div>
                               
							<div class="col-lg-12">                               
                                <div class="contact-field p-relative c-email mb-20">                                    
                                    <input type="email" name="email"  placeholder="Write here your email" required>
                                </div>                                
                            </div>
							<div class="col-lg-12">                               
                                <div class="contact-field p-relative c-subject mb-20">                                   
                                    <input type="text" name="phone" placeholder="Enter your Number">
                                </div>
                            </div>							
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-45">                                  
                                    <textarea name="message" id="message"  cols="30" rows="10" placeholder="Write comments" required></textarea>
                                </div>
                                <div class="slider-btn">                                          
                                            <input type="submit"  class="btn ss-btn" data-animation="fadeInRight" value="Send Message" data-delay=".8s">				
                                        </div>                             
                            </div>
                            </div>
                        
                    </form>
						</div>
					</div>
                    
                </div>
               
            </section>
           