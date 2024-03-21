<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
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
    public function index(){
       // Initialize Guzzle client
       $client = new Client();

       try {
           // Send GET request to API endpoint
           $response = $client->request('GET', 'https://dr.sobrokom.store/api/doctor/testimonial/1');

           // Get JSON response body
           $body = $response->getBody();

           // Decode JSON response
           $data = json_decode($body, true);

           // Check if decoding was successful
           if ($data === null) {
               return response()->json(['error' => 'Failed to decode JSON response'], 500);
           }

           // Return the view with testimonial data
           return view('frontend.index', ['testimonials' => $data]);
       } catch (\Exception $e) {
           // Handle exception
           return response()->json(['error' => 'Failed to fetch data from the API'], 500);
       }
            
        
    }//
    public function ContactUs(){
        return view('frontend.contact_us.contact_us');
    }//
    public function ServicesDetails(Request $request){
    //  $dr_id = $request->dr_id;
    //  $name = $request->name;
    //  $description = $request->description;
    //  $price = $request->price;
    //  $service_image = $request->service_image;
    //  $created_at = $request->created_at;
    //  $created_at = Carbon::parse($created_at);
    // ,compact('dr_id','name','description','price','service_image','created_at')
        return view('frontend.services.services_details');
    }//
   
}
