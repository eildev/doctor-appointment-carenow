<style>
    .truncate-text {
    overflow: hidden;

    text-overflow: ellipsis;
    /* Set width or max-width to control the size of the container */
    max-height: 160px; /* Example width */
}
.blog-thumb{
    height:auto !important;
    width:auto;
}
</style>
<section id="blog" class="blog-area  p-relative pt-100 pb-90 fix" style="background-image:url({{asset('frontend')}}/img/an-bg/an-bg10.png); background-size: contain;background-repeat: no-repeat;background-position: center center;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="section-title text-center mb-80" >
                              <span> OUR LATEST BOLG </span>
                                <h2>Stay Updated To Our Blog & News</h2>
                                <p >Explore the Latest Insights, Expert Tips, Health News, and Personal Stories on Our Comprehensive Medical Blog & News Section, Your Trusted Source for Wellness Knowledge and Suppor</p>
                            </div>
                        </div>
                    </div>
                    <div class="row blog">

                    </div>
                </div>
 </section>
<div>
<form id="blogDetailsForm" method="POST" action="{{ url('/blog-details') }}">
    @csrf <!-- CSRF protection -->

    <!-- Hidden input fields to store data -->
    <input type="hidden" name="cat_id" id="cat_id">
    <input type="hidden" name="dr_id" id="dr_id">
    <input type="hidden" name="user_id" id="user_id">
    <input type="hidden" name="title" id="title">
    <input type="hidden" name="desc" id="desc">
    <input type="hidden" name="tags" id="tags">
    <input type="hidden" name="image" id="image">
    <input type="hidden" name="created_at" id="created_at">
</form>
</div>
<script>
    $(document).ready(function(){
      $.ajax({
        url:"https://dr.sobrokom.store/api/doctor/home-blog/1",
        type:'GET',
        success:function(res){
            var blog ="";

           $.each(res.blogInfo,function(key,value){
            var date = new Date(value.created_at);
            // Format the date
            var formattedDate = `${('0' + date.getDate()).slice(-2)}-${('0' + (date.getMonth() + 1)).slice(-2)}-${date.getFullYear()}`;
            var truncatedTitle = value.title.length > 50 ? value.title.substring(0, 50) + "..." : value.title;
           var truncatedDesc = value.desc.length > 60 ? value.desc.substring(0, 60) + "..." : value.desc;

            blog += `
           <div class="col-lg-4 col-md-12">
                            <div class="single-post mb-30" >
                                <div class="blog-thumb">
                                    <a href="#"value="${value.id}" class="blogDetails">
                                        <img style="height:310px;width:auto" src="https://dr.sobrokom.store/uploads/blog/blog_post/${value.image}" alt="img" >
                                         <img src="{{asset('frontend')}}/img/bg/b-link.png" alt="b-link" class="b-link">
                                    </a>
                                </div>
                                <div class="blog-content text-center">
                               <div class="truncate-text">
                               <h4><a href="#" value="${value.id}" class="blogDetails">${truncatedTitle}</a></h4>
                                     <p>${value.desc}</p>
                               </div>
                                     <div class="b-meta mt-20">
                                       <div class="row">
                                             <div class="col-lg-6 col-md-6">
                                               <i class="far fa-calendar-alt"></i>${formattedDate}
                                             </div>
                                            <div class="col-lg-6 col-md-6">
                                               <i class="fas fa-user"></i> Admin
                                             </div>
                                         </div>
                                    </div>

                                </div>

                            </div>
                        </div>`
                $('.blog').html(blog);
           });
        }
      });
    });

    $(document).ready(function() {
        $(document).on('click', '.blogDetails', function(e) {
            e.preventDefault();
            var id = $(this).attr('value');
            $.ajax({
                url:"https://dr.sobrokom.store/api/blog/details/"+id,
                type:'GET',
                dataType:"json",
                success:function(res){
                document.querySelector('#cat_id').value= res.blogdetais.cat_id,
                document.querySelector('#dr_id').value= res.blogdetais.dr_id,
                document.querySelector('#user_id').value= res.blogdetais.user_id,
                document.querySelector('#title').value= res.blogdetais.title,
                document.querySelector('#desc').value= res.blogdetais.desc,
                document.querySelector('#tags').value= res.blogdetais.tags,
                document.querySelector('#image').value= res.blogdetais.image,
                document.querySelector('#created_at').value= res.blogdetais.created_at,
                $("#blogDetailsForm").submit();
                }
            });
        });
    });
</script>
