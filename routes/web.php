<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\user\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function(){
    return view('auth.register');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');

// Route::get('/adlogin', function(){
//     return view('loginv2');
// })->name('adlogin');



// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->middleware('user')->group(function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::any('/information/add', [UserDashboardController::class, 'personal_info_store'])->name('user.information');

    // Essential Information
    Route::any('/essential/info', [UserDashboardController::class, 'essential_info'])->name('essential.information');
    Route::any('/essential/info/add', [UserDashboardController::class, 'essential_info_store'])->name('essential.information.add');
    Route::any('/essential/info/delete/{id}', [UserDashboardController::class, 'essential_info_delete'])->name('essential.information.delete');
   
    // Third Page Sections Files 
    Route::any('/file/attach',[UserDashboardController::class, 'file'])->name('file.attach');

    // Associates Members Start
    Route::any('/file/associate/add',[UserDashboardController::class, 'file_associate_add'])->name('file.associate.add');
    Route::any('/file/associate/delete/{id}',[UserDashboardController::class, 'file_associate_delete'])->name('file.associate.delete');
    // Associates Members End

    // Current Membership in other Organization Start
    Route::any('/file/current/add',[UserDashboardController::class, 'file_current_organization_add'])->name('file.current.organization.add');
    Route::any('/file/current/delete/{id}',[UserDashboardController::class, 'file_current_organization_delete'])->name('file.current.organization.delete');
    // Current Membership in other Organization End

    // Current Appointment/Position Start
    Route::any('/file/appointment/add',[UserDashboardController::class, 'file_current_appointment_add'])->name('file.current.appointment.add');
    Route::any('/file/appointment/delete/{id}',[UserDashboardController::class, 'file_current_appointment_delete'])->name('file.current.appointment.delete');
    // Current Appointment/Position End

    // File Documents Start
    Route::any('/file/document/add',[UserDashboardController::class, 'file_document_add'])->name('file.document.add');
    // File Documents End

    // Payment Section Start
    Route::any('/payment', [UserDashboardController::class, 'payment'])->name('payment');
    Route::any('/payment/store', [UserDashboardController::class, 'payment_store'])->name('payment.store');
    // Payment Section End

    // Area Section Start
    Route::any('/area_clinical_interests', [UserDashboardController::class, 'area'])->name('area');
    Route::any('/area_clinical_interests/store', [UserDashboardController::class, 'area_store'])->name('area.store');
    Route::any('/area_clinical_interests/details/{id}', [UserDashboardController::class, 'area_details'])->name('area.details');
    // Area Section End

    // Final Section Start
    Route::any('/complete', [UserDashboardController::class, 'final'])->name('final');
    // Final Section End

});

Route::prefix('admin')->middleware('admin')->group(function () {

    // Admin Route Start
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard/{id}/{status}', [DashboardController::class, 'status'])->name('admin.dashboard.status');
    // User Information 
    Route::any('/user/details/{id}', [DashboardController::class, 'user_details'])->name('admin.user.details');
    // Admin Route End

    // // User Routes Start
    // Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('admin.user.dashboard');
    // Route::any('/information/add', [UserDashboardController::class, 'personal_info_store'])->name('admin.user.information');
    // Route::any('/essential/info', [UserDashboardController::class, 'essential_info'])->name('admin.essential.information');
    // Route::any('/essential/info/add', [UserDashboardController::class, 'essential_info_store'])->name('admin.essential.information.add');
    // Route::any('/essential/info/delete/{id}', [UserDashboardController::class, 'essential_info_delete'])->name('admin.essential.information.delete');
    // // Files 
    // Route::any('/file/attach',[UserDashboardController::class, 'file'])->name('admin.file.attach');
    // Route::any('/file/add',[UserDashboardController::class, 'file'])->name('admin.file.add');
    // // User Routes End

});