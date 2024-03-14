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
                                <p >Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row blog">
                        
                    </div>
                </div>
            </section>
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
         //   var truncatedDesc = value.desc.length > 60 ? value.desc.substring(0, 60) + "..." : value.desc;

            blog += `
           <div class="col-lg-4 col-md-12">
                            <div class="single-post mb-30" >
                                <div class="blog-thumb">
                                    <a href="">
                                        <img style="height:310px;width:350px" src="https://dr.sobrokom.store/uploads/blog/blog_post/${value.image}" alt="img">
                                         <img src="{{asset('frontend')}}/img/bg/b-link.png" alt="b-link" class="b-link">
                                    </a>
                                </div>
                                <div class="blog-content text-center">
                               <div class="truncate-text">
                               <h4><a href="${value.id}">${truncatedTitle}</a></h4>    
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
</script>