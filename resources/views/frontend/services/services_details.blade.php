@extends('frontend.master')
@section('body')

<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Services Details</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Services Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
			<!-- choose-area -->
            <section class="choose-area pt-100 pb-50 p-relative">
                <div class="chosse-img wow fadeInRight animated" data-animation="fadeInRight animated" data-delay=".2s"></div>
                <div class="container">
                    <div class="row">
                        <!-- rightside -->
               <div class="content-side col-xl-8 col-lg-8 col-md-8 col-sm-12 order-2">
                  <div class="service-detail">
                        <div class="images-box row">
                            <div class="column col-lg-12 col-md-12 col-sm-8 wow fadeInLeft">
                                <figure class="image wow fadeIn"><a href="#" class="lightbox-image" data-fancybox="services"><img src="{{'https://dr.sobrokom.store/uploads/service_image/'.$service_image}}" height="460px" width="auto" alt="Service"></a></figure>
                            </div>


                        </div>

                        <div class="content-box">
                            <h2>{{$name}}</h2>
                            <p>{!!$description!!}</p>

                         </div>

               </div>
               <!-- rightside -->

            </div>
            <div class="col-lg-4">
                <aside>
                    <div class="widget mb-40">
                        <div class="widget-title text-center">
                            <h4>Other Service</h4>
                        </div>
                        <div class="widget__post">
                            <ul class="allService">



                            </ul>
                        </div>
                    </div>

                </aside>
            </div>
                </div>
                <form id="serviceDetailsForm" method="POST" action="{{ url('/service/details') }}">
                    @csrf
                   <input type="hidden" name="dr_id" id="dr_id">
                   <input type="hidden" name="name" id="name">
                   <input type="hidden" name="description" id="description">
                   <input type="hidden" name="price" id="price">
                   <input type="hidden" name="service_image" id="service_image">
                   <input type="hidden" name="created_at" id="created_at">
                   </form>
            </section>


<script>
            $(document).ready(function(){
                $.ajax({
                    url:"https://dr.sobrokom.store/api/doctor/home-service/1",
                    type:"GET",
                    success:function(res){
                        var service ="";

                       $.each(res.allservicelimit, function(key, value){
                        var allServiceName = value.name.length > 20 ? value.name.substring(0, 20) + "..." : value.name;
                        var allServiceDesc = value.description.length > 50 ? value.description.substring(0, 50) + "..." : value.description;

                     service +=`
                     <li>
                <div class="widget__post-thumb">
                    <a href="" value="${value.id}" class="serviceDetail">
                    <img src="https://dr.sobrokom.store/uploads/service_image/${value.service_image}" height="60px" width="60px" alt="">
                    </a>
                </div>
                <div class="widget__post-content">
                    <h6><a href="#" value="${value.id}" class="serviceDetail">${allServiceName}</a></h6>
                    <span>${allServiceDesc}</span>
                </div>
               </li>
                     `
                         $(".allService").html(service)
                       });


                    }
                });
                });

                $(document).ready(function() {
                $(document).on('click', '.serviceDetail', function(e) {
                    e.preventDefault();
                    var id = $(this).attr('value');
                    $.ajax({
                        url:"https://dr.sobrokom.store/api/service/details/"+id,
                        type:'GET',
                        dataType:"json",
                        success:function(res){
                        //console.log(res.singleserviceDetails.name);
                        document.querySelector('#dr_id').value= res.singleserviceDetails.dr_id,
                        document.querySelector('#name').value= res.singleserviceDetails.name,
                        document.querySelector('#description').value= res.singleserviceDetails.description,
                        document.querySelector('#price').value= res.singleserviceDetails.price,
                        document.querySelector('#service_image').value= res.singleserviceDetails.service_image,
                        document.querySelector('#created_at').value= res.singleserviceDetails.created_at,
                        $("#serviceDetailsForm").submit();
                        }
                    });
                });
            });
        </script>
@endsection
