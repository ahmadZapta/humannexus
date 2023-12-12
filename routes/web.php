<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function(){return view('frontend.home');})->name('home');

Route::view('about-us', 'frontend.about-us')->name('aboutUs');
Route::view('organizations', 'frontend.organizations')->name('organizations');
Route::view('organization/organization-detail', 'frontend.organization-detail')->name('organizationDetail');
Route::view('contact-us', 'frontend.contact-us')->name('contactUs');
Route::view('blogs', 'frontend.blogs.blogs')->name('blogs');
Route::view('blog-details', 'frontend.blogs.blog-details')->name('blogDetail');


Route::view('register', 'frontend.register')->name('register');
Route::view('login', 'frontend.login')->name('login');
Route::view('forget-password', 'frontend.forget-password')->name('forgetPassword');
Route::view('change-password', 'frontend.change-password')->name('changePassword');
Route::view('create-password', 'frontend.create-password')->name('createPassword');



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
