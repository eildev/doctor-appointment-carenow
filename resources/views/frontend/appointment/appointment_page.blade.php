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
						<form method="post" class="contact-form" >
                            @csrf
							<div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">
                                    <input type="text" name="patient_name" id="patient_name" placeholder="Patient name" required>
                                </div>
                                <input type="hidden" name="dr_id" id="dr_id" value="1">
                                <input type="hidden" name="patient_id" id="patient_id"  value="11">
                            </div>
                                <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">
                                    <input type="Email" name="email"  id="email" placeholder="Enter Email Address" required>
                                </div>
                            </div>
							<div class="col-lg-6">
                                <div class="contact-field p-relative c-email mb-20  focus-date">
                                    <small class="small" for="">Appointment Date</small>
                                    <input type="date" name="appointment_date" id="appointment_date" placeholder="Appointment Date" onfocus="(this.type='date')" required>
                                </div>
                            </div>
							<div class="col-lg-6">
                                <div class="contact-field p-relative c-email mb-20  focus-date">
                                    <input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile Number" required>
                                </div>
                            </div>

                                <div class="col-lg-6 wow fadeInDown">
                                    <div >
                                        <div class="title-gender">

                                        </div>
                                        <div class="list-gender">
                                           <div class="option-gender p-1">
                                          <span class="pr-2">Gender : </span>
                                                <input type="radio" name="gender" id="gender" value="make" >
                                                <label class="text-color-title-sidebar pr-2" for="male" >Male</label>

                                                <input type="radio" name="gender" id="gender" value="female">
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
                                    <textarea name="note" id="note"  cols="30" rows="10"  placeholder="Note to the doctor (optional)" required></textarea>
                                </div>
                                <div class="slider-btn">
                                            <input type="submit" class="btn ss-btn appointment" data-animation="fadeInRight" value="Book Now" data-delay=".8s">
                                        </div>
                            </div>
                            </div>

                    </form>
						</div>
					</div>

                </div>

            </section>

            <script>
                $(document).ready(function(){
               const btn = document.querySelector('.appointment');
               btn.addEventListener('click', function(e) {
                   e.preventDefault();
                   $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       }
                   });
                   let patient_name = document.querySelector('#patient_name').value;
                   let dr_id = document.querySelector('#dr_id').value;
                   let patient_id = document.querySelector('#patient_id').value;
                   let mobile = document.querySelector('#mobile').value;
                   let email = document.querySelector('#email').value;
                   let appointment_date = document.querySelector('#appointment_date').value;
                   let gender = document.querySelector('#gender').value;
                   let note = document.querySelector('#note').value;
                   $.ajax({
                       url: "https://dr.sobrokom.store/api/patient/book/appointment",
                       type: 'POST',
                       data_type: 'json',
                       data: {
                           'patient_name': patient_name,
                           'email': email,
                           'dr_id': dr_id,
                           'mobile': mobile,
                           'appointment_date': appointment_date,
                           'male': male,
                           'female': female,
                           'note': note,
                       },
                       success: function(success_response) {
                           if (success_response.status == 200) {
                               toastr.success(success_response.message);
                               document.querySelector('#dr_id').value="1";
                               document.querySelector('#patient_id').value="11";
                                document.querySelector('#mobile').value="";
                                document.querySelector('#email').value="";
                                document.querySelector('#appointment_date').value="";
                                document.querySelector('#gender').value="";
                                document.querySelector('#note').value="";
                           } else {
                               toastr.warning(success_response.error.email);
                           }


                       }
                   });
               });
               });
           </script>

@endsection
