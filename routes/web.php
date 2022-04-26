<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserEditController;
use App\Http\Controllers\user\DashboardController as UserDashboardController;
use App\Http\Controllers\user\PermissionController;
use App\Http\Controllers\user\UserListController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/clear_cache', function () {
    Artisan::call('cache:clear');
    dd("Cache is cleared");
});
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return redirect()->back()->with('success', ' Your site Rebooted Successfully...');
});
Route::get('/', function(){
    return view('auth.register');
})->name('reg');
Route::get('/home', function () {
    return view('welcome');
})->name('home');
// Route::get('/adlogin', function(){
//     return view('loginv2');
// })->name('adlogin');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('user')->group(function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::any('/user/information/add', [UserDashboardController::class, 'personal_info_store'])->name('user.information');
    // Essential Information
    Route::any('/user/essential/info', [UserDashboardController::class, 'essential_info'])->name('essential.information');
    Route::any('/user/essential/info/add', [UserDashboardController::class, 'essential_info_store'])->name('essential.information.add');
    Route::any('/user/essential/info/delete/{id}', [UserDashboardController::class, 'essential_info_delete'])->name('essential.information.delete');
    // Third Page Sections Files 
    Route::any('/user/file/attach',[UserDashboardController::class, 'file'])->name('file.attach');
    // Associates Members Start
    Route::any('/user/file/associate/add',[UserDashboardController::class, 'file_associate_add'])->name('file.associate.add');
    Route::any('/user/file/associate/delete/{id}',[UserDashboardController::class, 'file_associate_delete'])->name('file.associate.delete');
    // Associates Members End
    // Current Membership in other Organization Start
    Route::any('/user/file/current/add',[UserDashboardController::class, 'file_current_organization_add'])->name('file.current.organization.add');
    Route::any('/user/file/current/delete/{id}',[UserDashboardController::class, 'file_current_organization_delete'])->name('file.current.organization.delete');
    // Current Membership in other Organization End
    // Current Appointment/Position Start
    Route::any('/user/file/appointment/add',[UserDashboardController::class, 'file_current_appointment_add'])->name('file.current.appointment.add');
    Route::any('/user/file/appointment/delete/{id}',[UserDashboardController::class, 'file_current_appointment_delete'])->name('file.current.appointment.delete');
    // Current Appointment/Position End
    // File Documents Start
    Route::any('/user/file/document/add',[UserDashboardController::class, 'file_document_add'])->name('file.document.add');
    // File Documents End
    // Payment Section Start
    Route::any('/user/payment', [UserDashboardController::class, 'payment'])->name('payment');
    Route::any('/user/payment/store', [UserDashboardController::class, 'payment_store'])->name('payment.store');
    // Payment Section End
    // Area Section Start
    Route::any('/user/area_clinical_interests', [UserDashboardController::class, 'area'])->name('area');
    Route::any('/user/area_clinical_interests/store', [UserDashboardController::class, 'area_store'])->name('area.store');
    Route::any('/user/area_clinical_interests/details/{id}', [UserDashboardController::class, 'area_details'])->name('area.details');
    // Area Section End
   // Permission Section Start
    Route::any('/permission',[PermissionController::class, 'permission'])->name('user.permission');
    Route::any('/permission/personal/store/{value}',[PermissionController::class, 'permission_personal_store'])->name('user.permission.personal.store');
    Route::any('/permission/essential/store/{value}',[PermissionController::class, 'permission_essential_store'])->name('user.permission.essential.store');
    Route::any('/permission/active/store/{value}',[PermissionController::class, 'permission_active_store'])->name('user.permission.active.store');
    Route::any('/permission/file/store/{value}',[PermissionController::class, 'permission_file_store'])->name('user.permission.file.store');
    Route::any('/permission/organization/store/{value}',[PermissionController::class, 'permission_organization_store'])->name('user.permission.organization.store');
    Route::any('/permission/appoinment/store/{value}',[PermissionController::class, 'permission_appoinment_store'])->name('user.permission.appoinment.store');
    Route::any('/permission/area/store/{value}',[PermissionController::class, 'permission_area_store'])->name('user.permission.area.store');
    // Permission Section End
    // User Edit Start
    Route::any('/edit/details/{id}', [PermissionController::class, 'update'])->name('user.edit');
    Route::any('/edit/details', [PermissionController::class, 'update_store'])->name('user.edit.store');
    // User Edit End
    //user info delete Start
    Route::any('/essential/info/delete/{id}', [PermissionController::class, 'essential_info_delete'])->name('essential.info.delete');
    Route::any('/associate/info/delete/{id}', [PermissionController::class, 'associate_info_delete'])->name('associate.info.delete');
    Route::any('/appoinment/info/delete/{id}', [PermissionController::class, 'appoinment_info_delete'])->name('appoinment.info.delete');
    Route::any('/organization/info/delete/{id}', [PermissionController::class, 'organization_info_delete'])->name('organization.info.delete');
    //user info delete End
    // All User List Start
    Route::any('/application/status', [UserListController::class, 'application_status'])->name('application.status');
    // All User List End
    // All User List Start
    Route::any('/list/all', [UserListController::class, 'user_list'])->name('user.list');
    Route::any('/list/search', [UserListController::class, 'user_list_search'])->name('user.list.search');
    // All User List End
    Route::any('/details/{id}', [UserListController::class, 'user_information'])->name('member.details');
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
    Route::any('/search', [DashboardController::class, 'search'])->name('admin.user.search');
    // Download PDF
    Route::any('member/download/{id}', [DashboardController::class, 'download'])->name('member.download');

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


        // User Edit Start
        Route::any('/edit/details/{id}', [UserEditController::class, 'update'])->name('admin.user.edit');
        Route::any('/edit/details', [UserEditController::class, 'update_store'])->name('admin.user.edit.store');
        // User Edit End
        //user info delete Start
        Route::any('/essential/info/delete/{id}', [UserEditController::class, 'essential_info_delete'])->name('admin.essential.info.delete');
        Route::any('/associate/info/delete/{id}', [UserEditController::class, 'associate_info_delete'])->name('admin.associate.info.delete');
        Route::any('/appoinment/info/delete/{id}', [UserEditController::class, 'appoinment_info_delete'])->name('admin.appoinment.info.delete');
        Route::any('/organization/info/delete/{id}', [UserEditController::class, 'organization_info_delete'])->name('admin.organization.info.delete');
        //user info delete End

        Route::any('/general/members', [DashboardController::class, 'general_member'])->name('general.member');
        Route::any('/life/members', [DashboardController::class, 'life_member'])->name('life.member');
        Route::any('/associate/members', [DashboardController::class, 'associate_member'])->name('associate.member');
    });