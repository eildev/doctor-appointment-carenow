@extends('frontend.master')
@section('body')

<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Blog Details</h2>                                   
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- inner-blog -->
            <section class="inner-blog b-details-p pt-100 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-details-wrap">
							<div class="bsingle__post-thumb mb-30">
                            <img src="{{ 'https://dr.sobrokom.store/uploads/blog/blog_post/'.$image }}" alt="Blog Image" width="auto" height="460px">
                                </div>
                                <div class="meta__info">
                                    <ul>
                                        <li><a href="#">  <i class="far fa-calendar-alt"></i> <span> {{ $created_at->format('F j, Y') }}</sapn></a></li>
                                            <li><a href="#"><i class="far fa-user"></i>Admin</a></li>
                                         
                                    </ul>
                                </div>
                                <div class="details__content pb-50">
                                <h3><a href="#">{{$title}}</a></h3>
                                <p>{!!$desc!!}</p>
                                </div>
                                
                             
   
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside>
                                <div class="widget mb-40">
                                    <div class="widget-title text-center">
                                        <h4>Feeds</h4>
                                    </div>
                                    <div class="widget__post">
                                        <ul class="allBlogtitle">
                                            
                                            
                                           
                                        </ul>
                                    </div>
                                </div>
                                                            
                            </aside>
                        </div>
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
                    <img src="https://dr.sobrokom.store/uploads/blog/blog_post/${value.image}" height="60px" width="60px" alt="">
                </div>
                <div class="widget__post-content">
                    <h6><a href="#" value="${value.id}" class="blogDetails">${truncatedTitles}</a></h6>
                    <span><i class="far fa-clock"></i>${formattedDate}</span>
                </div>
               </li>`
               $('.allBlogtitle').append(allBlogTitle);
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
@endsection