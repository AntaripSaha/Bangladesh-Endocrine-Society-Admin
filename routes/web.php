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
    Route::any('/essential/info', [UserDashboardController::class, 'essential_info_store'])->name('essential.information');
});


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

});