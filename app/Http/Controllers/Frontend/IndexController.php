<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function BlogDetails($id){
        $blogDetails = $id;
        return view('frontend.blog.blog_details',compact('blogDetails'));
    }//
    public function GetAppointment(){
        return view('frontend.appointment.appointment_page');
    }
}
