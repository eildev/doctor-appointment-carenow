<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AppointmentController;
use App\Http\Controllers\Frontend\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('index');
//All Contact Controller
Route::controller(ContactController::class)->group(function () {
    Route::get('/home/contact', 'Contact')->name('home.contact');
});
//All appointment Controller
Route::controller(AppointmentController::class)->group(function () {
    Route::get('/home/appointment', 'Appointment')->name('home.appointment');
});
//All blog Controller
Route::controller(BlogController::class)->group(function () {
    Route::get('/home/blog', 'Blog')->name('home.blog');
});
