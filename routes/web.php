<?php


use App\Http\Controllers\Doctor\BlogController;
use App\Http\Controllers\Doctor\EducationController;
use App\Http\Controllers\Doctor\ExperienceController;
use App\Http\Controllers\Doctor\ScheduleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController as HomeBlogController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Patient\AppointmentController;
use App\Http\Controllers\Patient\ReviewController;
use App\Http\Controllers\PrivacyAndTermsConditionController;
use App\Http\Controllers\Hospital\DoctorScheduleController;
use Illuminate\Support\Facades\Route;

Route::get('/lang/change/{lang}', [HomeController::class, 'changeLang'])->name('changeLang');

Route::get('/', [HomeController::class, 'welcome']);
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/blog-list', [HomeBlogController::class, 'index'])->name('blog-list');
Route::get('/blog/{slug}',  [HomeBlogController::class, 'blogBySlug'])->name('blog');

Route::get('/blog-details', function () {
    return view('patient.blog.show');
})->name('blog_details');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/optimize', [HomeController::class, 'optimize']);
Route::get('/migrate', [HomeController::class, 'migrate']);

Route::get('link-storage', function () {
    $targetFolder = storage_path('app/public');

    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';

    symlink($targetFolder, $linkFolder);
});

// policy, terms and conditions routes

Route::post('/contactus', [PrivacyAndTermsConditionController::class, 'contactus'])->name('contactus');
Route::get('/privacy_policy', [PrivacyAndTermsConditionController::class, 'privacy'])->name('privacy');
Route::get('/terms_conditions', [PrivacyAndTermsConditionController::class, 'termsAndconditions'])->name('terms-conditions');

// Patient Routes
Route::get('search-doctor', [HomeController::class, 'search_doctor'])->name('search_doctor');
Route::get('search-doctor-index', [HomeController::class, 'search_doctor_index'])->name('search_doctor_index');
Route::get('search-pharmacy', [HomeController::class, 'search_pharmacy'])->name('search_pharmacy');
Route::get('doctors/{doctor}/profile', [HomeController::class, 'doctor_profile'])->name('doctor_profile');
Route::get('hospitals/{hospital}/profile', [HomeController::class, 'hospital_profile'])->name('hospital_profile');
Route::post('/subscribe_newsletter', [HomeController::class, 'subscribeNewsletter']);


Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/contactus-list', [HomeController::class, 'contactuslist'])->name('contactuslist');



    // notifications
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');


    //Doctor route
    Route::resource('education', EducationController::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('schedule', ScheduleController::class);

    //Blogs Route
    Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('blogs/create-blog', [BlogController::class, 'create'])->name('create_blog');
    Route::post('store-blog', [BlogController::class, 'store'])->name('store_blog');
    Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('edit_blog');
    Route::patch('update-blog/{blog}/update', [BlogController::class, 'update'])->name('update_blog');
    Route::get('blogs/{blog}/details', [BlogController::class, 'show'])->name('show_blog');
    Route::delete('blogs/{blog}/blog', [BlogController::class, 'destroy'])->name('delete_blog');

    //FOR ADMIN and HOSPITAL START
    // Repeat Schdule
    Route::get("/hospital/{doctor}/doctor-schedule", [DoctorScheduleController::class, "regularAvailabiltiyCreate"])->name("hospital.doctor-schedule.regular");
    Route::post("/hospital/{doctor}/doctor-schedule", [DoctorScheduleController::class, "regularAvailabiltiySave"]);
    Route::get("/hospital/{doctor}/doctor-schedule/edit", [DoctorScheduleController::class, "regularAvailabiltiyEdit"])->name("hospital.doctor-schedule.regular.edit");
    Route::post("/hospital/{doctor}/doctor-schedule/update", [DoctorScheduleController::class, "regularAvailabiltiyUpdate"])->name("hospital.doctor-schedule.regular.update");
    Route::post("/hospital/{doctor}/doctor-schedule/clear-all", [DoctorScheduleController::class, "regularAvailabiltiyDestroy"])->name("hospital.doctor-schedule.regular.destroy");

    // OneTime Schdule
    Route::get("/hospital/{doctor}/doctor-schedule/onetime", [DoctorScheduleController::class, "oneTimeAvailabiltiyCreate"])->name("hospital.doctor-schedule.onetime");
    Route::post("/hospital/{doctor}/doctor-schedule/onetime", [DoctorScheduleController::class, "oneTimeAvailabiltiySave"]);
    Route::get("/hospital/{doctor}/doctor-schedule/onetime/{date}/edit", [DoctorScheduleController::class, "oneTimeAvailabiltiyEdit"])->name("hospital.doctor-schedule.onetime.edit");
    Route::post("/hospital/{doctor}/doctor-schedule/onetime/{date}/update", [DoctorScheduleController::class, "oneTimeAvailabiltiyUpdate"])->name("hospital.doctor-schedule.onetime.update");
    Route::post("/hospital/{doctor}/doctor-schedule/onetime/{date}/delete", [DoctorScheduleController::class, "oneTimeAvailabiltiyDestroy"])->name("hospital.doctor-schedule.onetime.delete");

    // Unvailability Schdule
    Route::get("/hospital/{doctor}/doctor-schedule/unvailability", [DoctorScheduleController::class, "unAvailabiltiyCreate"])->name("hospital.doctor-schedule.unavailability");
    Route::post("/hospital/{doctor}/doctor-schedule/unvailability", [DoctorScheduleController::class, "unAvailabiltiySave"]);
    Route::get("/hospital/{doctor}/doctor-schedule/unvailability/{date}/edit", [DoctorScheduleController::class, "unAvailabiltiyEdit"])->name("hospital.doctor-schedule.unavailability.edit");
    Route::post("/hospital/{doctor}/doctor-schedule/unvailability/{date}/update", [DoctorScheduleController::class, "unAvailabiltiyUpdate"])->name("hospital.doctor-schedule.unavailability.update");
    Route::post("/hospital/{doctor}/doctor-schedule/unvailability/{date}/delete", [DoctorScheduleController::class, "unAvailabiltiyDestroy"])->name("hospital.doctor-schedule.unavailability.delete");
    //FOR ADMIN and HOSPITAL END

    //FOR DOCTOR start
    // Repeat Schdule
    Route::get("/doctor/{doctor}/doctor-schedule", [ScheduleController::class, "regularAvailabiltiyCreate"])->name("doctor.doctor-schedule.regular");
    Route::post("/doctor/{doctor}/doctor-schedule", [ScheduleController::class, "regularAvailabiltiySave"]);
    Route::get("/doctor/{doctor}/doctor-schedule/edit", [ScheduleController::class, "regularAvailabiltiyEdit"])->name("doctor.doctor-schedule.regular.edit");
    Route::post("/doctor/{doctor}/doctor-schedule/update", [ScheduleController::class, "regularAvailabiltiyUpdate"])->name("doctor.doctor-schedule.regular.update");
    Route::post("/doctor/{doctor}/doctor-schedule/clear-all", [ScheduleController::class, "regularAvailabiltiyDestroy"])->name("doctor.doctor-schedule.regular.destroy");

    // OneTime Schdule
    Route::get("/doctor/{doctor}/doctor-schedule/onetime", [ScheduleController::class, "oneTimeAvailabiltiyCreate"])->name("doctor.doctor-schedule.onetime");
    Route::post("/doctor/{doctor}/doctor-schedule/onetime", [ScheduleController::class, "oneTimeAvailabiltiySave"]);
    Route::get("/doctor/{doctor}/doctor-schedule/onetime/{date}/edit", [ScheduleController::class, "oneTimeAvailabiltiyEdit"])->name("doctor.doctor-schedule.onetime.edit");
    Route::post("/doctor/{doctor}/doctor-schedule/onetime/{date}/update", [ScheduleController::class, "oneTimeAvailabiltiyUpdate"])->name("doctor.doctor-schedule.onetime.update");
    Route::post("/doctor/{doctor}/doctor-schedule/onetime/{date}/delete", [ScheduleController::class, "oneTimeAvailabiltiyDestroy"])->name("doctor.doctor-schedule.onetime.delete");

    // Unvailability Schdule
    Route::get("/doctor/{doctor}/doctor-schedule/unvailability", [ScheduleController::class, "unAvailabiltiyCreate"])->name("doctor.doctor-schedule.unavailability");
    Route::post("/doctor/{doctor}/doctor-schedule/unvailability", [ScheduleController::class, "unAvailabiltiySave"]);
    Route::get("/doctor/{doctor}/doctor-schedule/unvailability/{date}/edit", [ScheduleController::class, "unAvailabiltiyEdit"])->name("doctor.doctor-schedule.unavailability.edit");
    Route::post("/doctor/{doctor}/doctor-schedule/unvailability/{date}/update", [ScheduleController::class, "unAvailabiltiyUpdate"])->name("doctor.doctor-schedule.unavailability.update");
    Route::post("/doctor/{doctor}/doctor-schedule/unvailability/{date}/delete", [ScheduleController::class, "unAvailabiltiyDestroy"])->name("doctor.doctor-schedule.unavailability.delete");

    // for doctor end


    // Review
    Route::post('add-review', [ReviewController::class, 'store'])->name('add_review');
    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews');

    //ADMIN REVIEWS
    

    // Patient Appointments
    Route::get('appointment/{doctor}/create', [AppointmentController::class, 'create_appointment'])->name('create_appointment');
    Route::post('store-appointment', [AppointmentController::class, 'store_appointment'])->name('store_appointment');
    Route::get('appointments', [AppointmentController::class, 'manage_appointments'])->name('appointments');
    Route::patch('appointments/{appointment}/update', [AppointmentController::class, 'update_apt_status'])->name('update_appointment_status');
    Route::get('appointment/{doctor}/availability', [AppointmentController::class, 'get_availability'])->name('get_availability');

    Route::get('update-appointment/{id}', [AppointmentController::class, 'update_appointment'])->name('update-appointment');
    Route::put('update-appointment/{id}', [AppointmentController::class, 'save_update_appointment'])->name('save_update_appointment');


    // Route::resource('patient-profile', AppointmentController::class);

    // Invoice Routes
    Route::get('invoices', [AppointmentController::class, 'invoice'])->name('invoices');
    Route::get('invoices/{invoice}/view', [AppointmentController::class, 'show_invoice'])->name('show_invoice');

    // Patient Dashboard
    // Route::get('/patient-dashboard', function (){
    //     return view('patient.patient-dashboard');
    // })->name('patient_dashboard');
    Route::get('/patient-dashboard', [HomeController::class, 'patientDashboard'])->name('patient_dashboard');;
});

require __DIR__ . '/auth.php';
