@extends('frontend.master')
@section('body')
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{asset('frontend')}}/img/testimonial/test-bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Book Appointment</h2>                                    
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Book Appointment</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
     </section>
<section id="contact" class="contact-area contact-bg pb-70 p-relative fix" style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg11.png); background-size: cover;background-repeat: no-repeat;">
                <div class="container">
             
					<div class="row mt-1 pt-1">
                       
						<div class="col-lg-12">
                        <div class="section-title mb-60" >
                                <span>Book Appointment</span>
                                <h2>Your Information:</h2>
                            </div>
						<form action="#" class="contact-form" >
                            @csrf
							<div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="text" name="patient_name" placeholder="Patient name" required>
                                </div>                               
                            </div>
                                <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="Email" name="email"  placeholder="Enter Email Address" required>
                                </div>                               
                            </div>
							<div class="col-lg-6">                               
                                <div class="contact-field p-relative c-email mb-20  focus-date">                                    
                                    <input type="date" name="date"  placeholder="Date of Birth" onfocus="(this.type='date')" required>
                                </div>
                            </div>
							<div class="col-lg-6">                               
                                <div class="contact-field p-relative c-email mb-20  focus-date">                                    
                                    <input type="text" name="number"  placeholder="Enter Your Mobile Number" required>
                                </div>                                
                            </div>
                       
                                <div class="col-lg-6 wow fadeInDown">
                                    <div >
                                        <div class="title-gender">
                                           
                                        </div>
                                        <div class="list-gender">
                                           <div class="option-gender p-1">
                                          <span class="pr-2">Gender :</span> 
                                                <input type="radio" name="gender" id="male" value="1" >
                                                <label class="text-color-title-sidebar pr-2" for="male" >Male</label>
                                               
                                                <input type="radio" name="gender" id="female" value="2">
                                                <label class="text-color-title-sidebar pr-2" for="female" >Female</label>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                        
							<!-- <div class="col-lg-12">                               
                                <div class="contact-field p-relative c-subject mb-20">                                   
                                    <input type="text" name="subjenotect" placeholder="Note to the doctor (optional)">
                                </div>
                            </div>	 -->
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-45">                                  
                                    <textarea name="message" id="message"  cols="30" rows="10"  placeholder="Note to the doctor (optional)" required></textarea>
                                </div>
                                <div class="slider-btn">                                          
                                            <input type="submit" class="btn ss-btn" data-animation="fadeInRight" value="Book Now" data-delay=".8s">				
                                        </div>                             
                            </div>
                            </div>
                        
                    </form>
						</div>
					</div>
                    
                </div>
               
            </section>
           

@endsection