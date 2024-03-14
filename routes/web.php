<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AppointmentController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ServiceController;

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
Route::controller(AboutUsController::class)->group(function () {
     Route::get('/about-us', 'AboutUs')->name('about.page'); 
 });
Route::controller(ServiceController::class)->group(function () {
     Route::get('/all-service', 'AllServices')->name('all.services'); 
 });

