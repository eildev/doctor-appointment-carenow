@extends('frontend.master')
@section('body')
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Blog List</h2>                                   
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="inner-blog pt-100 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 blog">
                           <!-- <div class="blog">

                           </div> -->
                        
                            <div class="pagination-wrap mb-50">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a href="#">1</a></li>
                                        <li class="page-item"><a href="#">2</a></li>
                                        <li class="page-item"><a href="#">3</a></li>
                                        <li class="page-item"><a href="#">...</a></li>
                                        <li class="page-item"><a href="#">10</a></li>
                                        <li class="page-item"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside>
                           
                                <div class="widget mb-40">
                                    <div class="widget-title text-center">
                                        <h4>Feeds</h4>
                                    </div>
                                    <div class="widget__post ">
                                        <ul class="allBlogtitle">
                                            
                                            
                                           
                                        </ul>
                                    </div>
                                </div>
                                                               
                            </aside>
                        </div>
                    </div>
                </div>
            </section>

            <script>
    $(document).ready(function(){
      $.ajax({
        url:"https://dr.sobrokom.store/api/doctor/home-blog/1",
        type:'GET',
        success:function(res){

            var allblog ="";
           
           $.each(res.allBlog,function(key,value){ 
            var date = new Date(value.created_at);

            // Format the date
            var formattedDate = `${('0' + date.getDate()).slice(-2)}-${('0' + (date.getMonth() + 1)).slice(-2)}-${date.getFullYear()}`;
            var truncatedTitle = value.title.length > 50 ? value.title.substring(0, 50) + "..." : value.title;
          var truncatedDesc = value.desc.length > 60 ? value.desc.substring(0, 300) + "..." : value.desc;

            allblog += `
            <div class="bsingle__post mb-50">
                                <div class="bsingle__post-thumb">
                                    <img src="https://dr.sobrokom.store/uploads/blog/blog_post/${value.image}" width="770px" height="460px" alt="">
                                </div>
                                <div class="bsingle__content">
                                    <div class="meta-info">
                                        <ul>
                                           <li><a href="#">  <i class="far fa-calendar-alt"></i> ${formattedDate}</a></li>
                                           
                                        </ul>
                                    </div>
                                    <h2><a href="blog-details.html">${truncatedTitle}</a></h2>
                                    <p>${truncatedDesc}</p>
                                        <div class="slider-btn">   
                                            <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>				
                                        </div> 
                                </div>
                            </div>
                    `
                   
                $('.blog').html(allblog);
               
           });
           var allBlogTitle ="";
           const blogData = res.allBlogs.slice(0,5)
        //    console.log(res.allBlogs.slice(0,6));
           $.each(blogData,function(key,value){ 

           //  console.log(value);
           var date = new Date(value.created_at);
           var formattedDate = `${('0' + date.getDate()).slice(-2)}-${('0' + (date.getMonth() + 1)).slice(-2)}-${date.getFullYear()}`;
            var truncatedTitles = value.title.length > 30 ? value.title.substring(0, 30) + "..." : value.title;
              allBlogTitle +=`
                    <li>
                <div class="widget__post-thumb">
                    <img src="img/blog/aside/post_01.jpg" alt="">
                </div>
                <div class="widget__post-content">
                    <h6><a href="#">${truncatedTitles}</a></h6>
                    <span><i class="far fa-clock"></i>${formattedDate}</span>
                </div>
               </li>`
               $('.allBlogtitle').append(allBlogTitle);
                });
           
        }
      });
    });
</script>
@endsection