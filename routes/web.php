<?php

use App\Http\Controllers\auth\ForgetPasswordController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\course\CourseController;
use App\Http\Controllers\pages\AboutController;
use App\Http\Controllers\pages\ContactController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\Profile;
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

Route::get('/', [HomeController::class , 'index'])->name('home');

Route::get('/about', AboutController::class)->name('about');

Route::get('/contact', [ContactController::class , 'index'])->name('contact');
Route::post('/contact', [ContactController::class , 'store'])->name('contact_post');

Route::get('/courses', [CourseController::class , 'index'])->name('courses');
Route::get('/course/{slug}', [CourseController::class , 'show'])->name('course');

Route::get('/login', [LoginController::class , 'index'])->name('login');
Route::post('/login', [LoginController::class , 'store'])->name('login_post');
Route::get('/logout', [LoginController::class , 'logout'])->name('logout');

Route::get('/register', [RegisterController::class , 'index'])->name('register');
Route::post('/register', [RegisterController::class , 'store'])->name('register_post');
Route::get('/forget_password', [ForgetPasswordController::class , 'index'])->name('forget_password');
Route::post('/forget_password', [ForgetPasswordController::class , 'update'])->name('forget_password_post');

Route::get('/reset_password/{link}', [ForgetPasswordController::class , 'reset_password'])->name('reset_password');
Route::post('/reset_password', [ForgetPasswordController::class , 'store'])->name('reset_password_post');

Route::get('profile/edit' , [Profile::class , 'index'])->name('profile_index')->middleware('client_login');
Route::post('profile/edit' , [Profile::class , 'edit'])->name('profile_edit')->middleware('client_login');
Route::get('profile/delete' , [Profile::class , 'deleteIndex'])->name('profile_delete_index')->middleware('client_login');
Route::post('profile/delete' , [Profile::class , 'delete'])->name('profile_delete')->middleware('client_login');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
