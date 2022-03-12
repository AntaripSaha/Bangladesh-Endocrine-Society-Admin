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
    Route::any('/essential/info', [UserDashboardController::class, 'essential_info'])->name('essential.information');
    Route::any('/essential/info/add', [UserDashboardController::class, 'essential_info_store'])->name('essential.information.add');
});


Route::prefix('admin')->middleware('admin')->group(function () {

    // Admin Route Start
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::any('/essential/category', [DashboardController::class, 'essential_category'])->name('essential.category');
    Route::any('/essential/category/add', [DashboardController::class, 'essential_category_store'])->name('essential.category.store');
    Route::any('/essential/category/delete/{id}', [DashboardController::class, 'essential_category_delete'])->name('essential.category.delete');
    // Admin Route End


    // User Routes Start
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::any('/information/add', [UserDashboardController::class, 'personal_info_store'])->name('user.information');
    Route::any('/essential/info', [UserDashboardController::class, 'essential_info'])->name('essential.information');
    Route::any('/essential/info/add', [UserDashboardController::class, 'essential_info_store'])->name('essential.information.add');
    Route::any('/essential/info/delete/{id}', [UserDashboardController::class, 'essential_info_delete'])->name('essential.information.delete');
   
    // User Routes End


});