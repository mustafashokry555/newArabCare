<?php

use App\Http\Controllers\Admin\BannerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\api\CommonController;
use App\Http\Controllers\Api\MainController;

// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Response;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::post('verify',[AuthController::class,'VerifyOtp']);

// MainController
Route::get('specialities',[MainController::class,'allSpecialities']);
Route::get('countries',[MainController::class,'allCountries']);
Route::get('cities',[MainController::class,'allCities']);
Route::get('insurances',[MainController::class,'get_insurances']);
Route::get('doctors',[MainController::class,'DoctorWithFilter']);
Route::get('doctor-profile/{id}',[MainController::class,'DoctorProfile']);
Route::get('availability/{id}',[MainController::class,'get_availability']);
Route::get('best-doctors',[MainController::class,'bestsDoctors']);
Route::post('/makeComplaint', [MainController::class, 'makeComplaint']);

Route::get('hospitals',[MainController::class,'HospitalsTest']);
Route::get('HospitalsTest',[MainController::class,'HospitalsTest']);
Route::get('hospital-profile/{id}',[MainController::class,'hospitalProfile']);

Route::get('banners',[MainController::class,'banners']);
Route::post('banner/store',[BannerController::class,'store']);


// Route::get('hospitals',[CommonController::class,'Hospitals']);
Route::get('available-doctors',[CommonController::class,'AvailableDoctors']);
Route::get('specialist/{id}',[CommonController::class,'SpecialityDoctors']);

Route::middleware(['auth:sanctum','patient'])->group( function () {
    
    Route::post('app-setting',[MainController::class,'updateOrCreateAppSetting']);
    Route::post('add-to-wishlist',[MainController::class,'AddToWishlist']);
    Route::get('wishlist',[MainController::class,'Wishlist']);
    Route::post('book-appointment',[MainController::class,'BookAppointment']);
    Route::get('patient-appointments',[MainController::class,'PatientAppointments']);
    Route::post('cancel-appointment',[MainController::class,'CancelAppointment']);
    Route::post('add-review', [MainController::class, 'add_review']);
    Route::post('add-hospital-review', [MainController::class, 'add_hospital_review']);

    Route::get('profile',[AuthController::class,'PatientProfile']);
    Route::post('update-profile',[AuthController::class,'UpdatePatientProfile']);
    Route::post('change-password',[AuthController::class,'changePassword']);

});