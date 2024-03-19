<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
class IndexController extends Controller
{
    public function BlogDetails(Request $request){
        // $data =  json_decode($data);
     //   $data = $request->input('blogDetails');
     $cat_id = $request->cat_id;
     $dr_id = $request->dr_id;
     $user_id = $request->user_id;
     $title = $request->title;
     $desc = $request->desc;
     $tags = $request->tags;
     $image = $request->image;
     $created_at = $request->created_at;
     $created_at = Carbon::parse($created_at);
        return view('frontend.blog.blog_details', compact('cat_id', 'dr_id', 'user_id', 'title', 'desc', 'tags', 'image','created_at'));
    }
    public function GetAppointment(){
        return view('frontend.appointment.appointment_page');
    }
    public function AllBlog(){
        return view('frontend.blog.all_blog');
    }//
    public function ContactUs(){
        return view('frontend.contact_us.contact_us');
    }//
    public function ServicesDetails(Request $request){
     $dr_id = $request->dr_id;
     $name = $request->name;
     $description = $request->description;
     $price = $request->price;
     $service_image = $request->service_image;
     $created_at = $request->created_at;
     $created_at = Carbon::parse($created_at);
        return view('frontend.services.services_details',compact('dr_id','name','description','price','service_image','created_at'));
    }//
   
}
