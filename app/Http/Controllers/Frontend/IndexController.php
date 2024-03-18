<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // public function BlogDetails(){
       
    //     return view('frontend.blog.blog_details');
    // }//
    public function GetAppointment(){
        return view('frontend.appointment.appointment_page');
    }
    public function AllBlog(){
        return view('frontend.blog.all_blog');
    }
}
