<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(){
    return view('frontend.contact.contact');
    }
    public function StoreContactMessage(Request $request){
   
    }
}
