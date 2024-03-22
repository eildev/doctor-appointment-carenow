
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
						<form  class="contact-form" method="post" >
                            @csrf
                            <input type="hidden" name="dr_id" id="dr_id" value="1">
							<div class="row">
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">
                                    <input type="text" name="name" id="name" placeholder="Write here your Name" required>
                                </div>
                            </div>

							<div class="col-lg-12">
                                <div class="contact-field p-relative c-email mb-20">
                                    <input type="email" name="email" id="email"  placeholder="Write here your email" required>
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input type="text" name="phone" id="phone" placeholder="Enter your Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-45">
                                    <textarea name="message" id="message"  cols="30" rows="10" placeholder="Write comments" required></textarea>
                                </div>
                                <div class="slider-btn">
                                <input type="submit"  class="btn ss-btn messagebtn" data-animation="fadeInRight" value="Send Message" data-delay=".8s">
                            </div>
                            </div>
                            </div>

                    </form>
						</div>
					</div>

                </div>
               <script>
               $(document).ready(function(){
        const btn = document.querySelector('.messagebtn');
        btn.addEventListener('click', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let name = document.querySelector('#name').value;
        let email = document.querySelector('#email').value;
        let phone = document.querySelector('#phone').value;
        let message = document.querySelector('#message').value;
        let dr_id = document.querySelector('#dr_id').value;
        $.ajax({
            url: "https://dr.sobrokom.store/api/patien/message/store",
            type: 'POST',
            data_type: 'json',
            data: {
                'name': name,
                'email': email,
                'phone': phone,
                'message': message,
                'dr_id': dr_id,
            },
            success: function(success_response) {
                if (success_response.status == 200) {
                    toastr.success(success_response.message);
                    document.querySelector('#name').value = '';
                    document.querySelector('#phone').value = '';
                    document.querySelector('#email').value = '';
                    document.querySelector('#message').value = '';
                    document.querySelector('#dr_id').value = '';
                } else {
                    toastr.warning(success_response.error.email);
                }
            }
        });
    });
    });
               </script>
            </section>
