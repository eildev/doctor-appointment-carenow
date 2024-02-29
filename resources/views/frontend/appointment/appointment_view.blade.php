@extends('frontend.master')
@section('body')
<div id="header-baner">
                <div class="container">
                    <div class="text-banner wow fadeInDown">
                        <div class="baner-tittle">
                            Book Appointment
                        </div>
                        <div class="baner-content">
                            <a href="index.html" class="font-raguler">Home </a><span> | Book Appointment
                            </span> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="70" data-smobile="70"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="your-information">
                                                <div class="themesflat-spacer clearfix" data-desktop="63" data-mobile="63" data-smobile="63"></div>
                                                <h4 class="text-color-title-sidebar wow fadeInDown">
                                                    Your Information:
                                                </h4>
                                                <div class="themesflat-spacer clearfix" data-desktop="27" data-mobile="27" data-smobile="27"></div>
                                                <div class="form-your-info">
                                                    <form action="#">

                                                        <div class="row-info wow fadeInDown">
                                                            <div class="col-info-6">
                                                                <input type="text" placeholder="Patient name">
                                                                <span class="icon-form">
                                                                    <i class="fas fa-user-edit"></i>
                                                                </span>
                                                            </div>
                                                            <div class="col-info-6">
                                                                <input type="text" placeholder="Email">
                                                                <span class="icon-form">
                                                                    <i class="fas fa-at"></i>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="row-info wow fadeInDown">
                                                            <div class="col-info-6 focus-date">
                                                                <input type="text" placeholder="Date of Birth" onfocus="(this.type='date')">
                                                                <span class="icon-form">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                </span>
                                                            </div>
                                                            <div class="col-info-6">
                                                                <input type="text" placeholder="Mobile Number">
                                                                <span class="icon-form">
                                                                    <i class="fas fa-phone-alt"></i>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15" data-smobile="15"></div>
                                                        <div class="row-info wow fadeInDown">
                                                            <div class="col-info-12">
                                                                <div class="box-gender">
                                                                    <div class="title-gender">
                                                                        Gender :
                                                                    </div>
                                                                    <div class="list-gender">
                                                                         <div class="option-gender">
                                                                            <input type="radio" name="gender" value="1" checked="checked">
                                                                            <span class="check-custom"></span>
                                                                            <label class="text-color-title-sidebar">Male</label>
                                                                         </div>
                                                                         <div class="option-gender">
                                                                            <input type="radio" name="gender" value="2">
                                                                            <span class="check-custom"></span>
                                                                             <label class="text-color-title-sidebar">Female</label>
                                                                         </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>

                                                       <div class="row-info wow fadeInDown">
                                                            <div class="col-info-12 icon-down">
                                                                <span class="icon-form">
                                                                    <i class="fas fa-chevron-down"></i>
                                                                </span>
                                                                <select name="hospital">
                                                                    <option value="1">Select Hospital</option>
                                                                    <option value="2">Select Hospital</option>
                                                                    <option value="3">Select Hospital</option>
                                                                </select>
                                                            </div>
                                                       </div>

                                                       <div class="row-info wow fadeInDown">
                                                           <div class="col-info-12 icon-down">
                                                                <span class="icon-form">
                                                                    <i class="fas fa-chevron-down"></i>
                                                                </span>
                                                                <select name="service">
                                                                    <option value="1">Select Service</option>
                                                                    <option value="2">Select Service</option>
                                                                    <option value="3">Select Service</option>
                                                                </select>
                                                           </div>
                                                        </div>

                                                        <div class="row-info wow fadeInDown">
                                                            <div class="col-info-12 focus-date">
                                                                <span class="icon-form">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                </span>
                                                                <input type="text" placeholder="Select Date" onfocus="(this.type='date')">
                                                            </div>
                                                        </div>

                                                        <div class="row-info wow fadeInDown">
                                                           <div class="col-info-12">
                                                                <span class="icon-form">
                                                                    <i class="fas fa-user"></i>
                                                                </span>
                                                                <select name="doctor">
                                                                    <option value="1">Select Doctor</option>
                                                                    <option value="2">Select Doctor</option>
                                                                    <option value="3">Select Doctor</option>
                                                                </select>
                                                           </div>
                                                        </div>

                                                        <div class="row-info wow fadeInDown">
                                                            <div class="col-info-12">
                                                                <span class="icon-form">
                                                                    <i class="far fa-clipboard"></i>
                                                                </span>
                                                                <textarea class="form-control" placeholder="Note to the doctor (optional)" maxlength="1000"></textarea>
                                                            </div>
                                                         </div>
                                                       
                                                    </form>
                                                </div><!--/form-your-info-->

                                                <div class="themesflat-spacer clearfix" data-desktop="19" data-mobile="19" data-smobile="19"></div>
                                                <h4 class="text-color-title-sidebar">
                                                    Payment Information:
                                                </h4>
                                                <div class="themesflat-spacer clearfix" data-desktop="19" data-mobile="19" data-smobile="19"></div>

                                                <div class="form-payment-info">

                                                    <form action="#">
                                                        <div class="row-info wow fadeInDown">
                                                            <div class="col-info-12">
                                                                <label>Name on card</label>
                                                                <input type="text" placeholder="Dorothy Schneider">
                                                            </div>
                                                        </div>
    
                                                        <div class="row-info wow fadeInDown">
                                                            <div class="col-info-6">
                                                                <label>Card number</label>
                                                                <input type="text" placeholder="xxxx-xxxx-xxxx-xxxx">
                                                            </div>
                                                            <div class="col-info-6">
                                                                <ul class="list-payment">
                                                                    <li>
                                                                       <a href="#">
                                                                         <i class="fab fa-cc-paypal"></i>
                                                                       </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fab fa-cc-visa"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                       <a href="#">
                                                                         <i class="fab fa-cc-mastercard"></i>
                                                                       </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fab fa-cc-amex"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="themesflat-spacer clearfix" data-desktop="3" data-mobile="3" data-smobile="3"></div>
    
                                                        <div class="row-info wow fadeInDown">
                                                            <div class="col-info-6">
                                                                <label>Expiration date</label>
                                                                <input type="date">
                                                            </div>
                                                            <div class="col-info-6">
                                                                <label>
                                                                    Security code
                                                                </label>
                                                                <input type="text" placeholder="CCV">
                                                            </div>
                                                        </div>

                                                        <div class="themesflat-spacer clearfix" data-desktop="3" data-mobile="3" data-smobile="3"></div>
                                                        
                                                        <div class="row-info wow fadeInDown">
                                                            <div class="col-info-12">
                                                                <div class="check-form-payment">
                                                                    <input type="checkbox">
                                                                    <label>I accept terms and conditions and general policy</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="themesflat-spacer clearfix" data-desktop="55" data-mobile="55" data-smobile="55"></div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="70" data-smobile="70"></div>
                                            <div class="booking-summary">
                                                <div class="title-booking wow fadeInDown">
                                                    <h4 class="text-color-white">Booking Summary</h4>
                                                </div>

                                                <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30"></div>

                                                <ul class="list-summary wow fadeInDown">
                                                    <li>
                                                        <ul class="date">
                                                            <li>
                                                                Date
                                                            </li>
                                                            <li class="w-right">
                                                                07/10/2020
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="hours">
                                                            <li>
                                                                Time09:30AM
                                                            </li>
                                                            <li class="w-right">
                                                                08:30 PM
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="name-doctor">
                                                            <li>
                                                                Doctor name
                                                            </li>
                                                            <li class="w-right">
                                                                Dr. Beatrice Willis
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div>

                                                <ul class="list-price wow fadeInDown">
                                                    <li>
                                                        <ul class="price">
                                                            <li>
                                                                Sit etiam convallis
                                                            </li>
                                                            <li class="w-right">
                                                                $80
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="price">
                                                            <li>
                                                                Curabitur praesent sed 
                                                            </li>
                                                            <li class="w-right">
                                                                $140
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="20" data-smobile="20"></div>

                                                <ul class="total wow fadeInDown">
                                                    <li>
                                                        <ul class="total font-bold">
                                                            <li>
                                                                Total
                                                            </li>
                                                            <li class="w-right">
                                                                $220
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <div class="themesflat-spacer clearfix" data-desktop="14" data-mobile="14" data-smobile="14"></div>

                                                <div class="box-btn wow fadeInDown">
                                                    <a href="#" class="themesflat-button bg-accent btn-booking">
                                                        <span>Confirm and Pay<i class="fas fa-long-arrow-alt-right"></i> </span>
                                                    </a>
                                                </div>

                                                <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="20" data-smobile="20"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="themesflat-spacer clearfix" data-desktop="254" data-mobile="200" data-smobile="100"></div>
                                    </div>

                                </div>
                            </div>
                            <!--.page-content-->
                        </div>
                        <!--#inner-content-->
                    </div>
                    <!--site-content-->
                </div>
                <!--#content-wrap-->
            </div>
@endsection