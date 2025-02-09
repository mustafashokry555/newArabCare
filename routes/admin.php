<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\HospitalDoctorsController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SpecialityController;
use App\Http\Controllers\Admin\InsuranceController;
use App\Http\Controllers\Admin\OfferController;
use Illuminate\Support\Facades\Route;



Route::get('/blog-details', function () {
    return view('patient.blog.show');
})->name('blog_details');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('link-storage', function () {
    $targetFolder = storage_path('app/public');

    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';

    symlink($targetFolder, $linkFolder);
});


// main search 
Route::get('get-cities', [CityController::class, 'get_cities'])->name('get.cities');
Route::get('get-insurances', [InsuranceController::class, 'get_insurances'])->name('get.insurances');
Route::get('get-specialities', [SpecialityController::class, 'get_specialities'])->name('get.specialities');

Route::middleware(['auth'])->group(function () {


    // Change Password
    Route::get('change-password', [CommonController::class, 'change_password'])->name('change_password');
    Route::post('store_new_password', [CommonController::class, 'store_new_password'])->name('store_new_password');
    Route::get('newsletters', [CommonController::class, 'newsletters'])->name('newsletters');

    // Offers
    Route::resource('offers', OfferController::class);

    // notifications
    Route::resource('insurances', InsuranceController::class);

    // Admin Routes
    Route::resource('hospitalDoctors', HospitalDoctorsController::class);
    // Reports
    Route::get('appointment-reports', [ReportController::class, 'appointment_reports'])->name('appointment_reports');
    Route::get('income-reports', [ReportController::class, 'income_reports'])->name('income_reports');
    Route::get('invoice-reports', [ReportController::class, 'invoice_reports'])->name('invoice_reports');
    Route::get('user_reports', [ReportController::class, 'user_reports'])->name('user_reports');


    Route::post('doctor/import', [DoctorController::class, 'import'])->name('doctor.import');

    Route::resource('speciality', SpecialityController::class);
    Route::resource('hospital', HospitalController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('patient', PatientController::class);
    Route::get('hospital-patients/{hospital}/list', [CommonController::class, 'hospital_patients'])->name('hospital_patients');
    Route::get('doctor-patients/{doctor}/list', [CommonController::class, 'doctor_patients'])->name('doctor_patients');
    Route::resource('profile', ProfileController::class);
    Route::get('settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('save-settings', [SettingsController::class, 'store'])->name('store_settings');
    // Route::get('social',[SettingsController::class,'social'])->name('social');

    Route::get('schedule-settings', [CommonController::class, 'schedule_settings'])->name('schedule_settings');
    Route::post('store-schedule-settings', [CommonController::class, 'store_schedule_setting'])->name('store_schedule_settings');

    //cities & countries 
    Route::resource('countries', CountryController::class);
    Route::resource('cities', CityController::class);

    // Extra routes for restore and force delete
    Route::get('countries/restore/{id}', [CountryController::class, 'restore'])->name('countries.restore');
    Route::delete('countries/force-delete/{id}', [CountryController::class, 'forceDelete'])->name('countries.force-delete');
    Route::get('cities/restore/{id}', [CityController::class, 'restore'])->name('cities.restore');
    Route::delete('cities/force-delete/{id}', [CityController::class, 'forceDelete'])->name('cities.force-delete');


    // doctor services
    Route::get('doctor-services', [CommonController::class, 'doctor_services'])->name('doctor_services');
    Route::post('add-doctor-services', [CommonController::class, 'store_services'])->name('store_services');
    // doctor specializations
    Route::get('doctor-specialization', [CommonController::class, 'doctor_specializations'])->name('doctor_specialization');
    Route::post('add-doctor-specialization', [CommonController::class, 'store_specialization'])->name('store_specializations');
    // Clinic Details
    Route::get('add-new-clinic', [CommonController::class, 'clinic_details'])->name('doctor_clinic');
    Route::post('store-new-clinic', [CommonController::class, 'store_clinic'])->name('store_clinic');
});

require __DIR__ . '/auth.php';
