<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function Appointment(){
        return view('frontend.appointment.appointment_view');
    }
}
