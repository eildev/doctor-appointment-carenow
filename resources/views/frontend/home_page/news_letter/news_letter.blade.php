
<section class="newslater-area pb-50" style="background-image: url({{asset('frontend')}}/img/an-bg/an-bg06.png);background-position: center bottom; background-repeat: no-repeat;" >
               <div class="container">
                   <div class="row align-items-end">
                       <div class="col-xl-4 col-lg-4 col-lg-4">
                           <div class="section-title mb-100">
                               <span>NEWSLETTER</span>
                               <h2>Subscribe To Our Newsletter</h2>
                           </div>
                       </div>
                       <div class="col-xl-4 col-lg-4">

                           <form id="contact-form4" class="contact-form newslater pb-130">
                            @csrf
                              <div class="form-group">
                                 <input class="form-control" name="email" id="subscriber_mail" type="email" placeholder="Email Address..." value="" required>
                                 <input type="hidden" name="dr_id" id="newsdr_id" value="1">
                                 <button type="submit" class="btn btn-custom subscribe" id="send2">Subscribe <i class="fas fa-chevron-right"></i></button>
                              </div>
                              <!-- /Form-email -->
                           </form>

                       </div>
                       <div class="col-xl-4 col-lg-4">
                           <img src="{{asset('frontend')}}/img/bg/news-illustration.png">
                       </div>
                   </div>

               </div>
           </section>
           <script>
     $(document).ready(function(){
    const btn = document.querySelector('.subscribe');
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let email = document.querySelector('#subscriber_mail').value;
        let dr_id = document.querySelector('#newsdr_id').value;
        $.ajax({
            url: "https://dr.sobrokom.store/api/subscriber/store",
            type: 'POST',
            data_type: 'json',
            data: {
                'email': email,
                'dr_id': dr_id,
            },
            success: function(success_response) {
                if (success_response.status == 200) {
                    toastr.success(success_response.message);
                    document.querySelector('#subscriber_mail').value = '';
                    document.querySelector('#dr_id').value = '1';
                } else {
                    toastr.warning(success_response.error.email);
                }


            }
        });
    });
    });
</script>
