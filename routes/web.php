<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\PaymentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MoviesAdd\MoviesAddController;
use App\Http\Controllers\Subscription\SubscribeController;
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
//Home page
Route::get('/home',[MoviesAddController::class,'Home'])->middleware('auth');
Route::get('/',function(){
    return view('home.frontpage');
})->name('frontpage');

//Login
Route::post('/auth',[LoginController::class,'Login']);

//Register
Route::get('/register',function(){
    return view('auth.register');
});
Route::post('/register', [LoginController::class,'register']);

//Logout
Route::get('/logout',[LoginController::class,'logout']);

//Movies add
Route::get('/moviesadd',function(){
    return view('home.moviesadd');
})->middleware('auth');
Route::post('/moviesadd',[MoviesAddController::class,'MoviesAdd'])->middleware('auth');

//MoviesDetail
Route::get('detail/{id}',[MoviesAddController::class,'detail']);

//Submit
Route::post('/submit',[LoginController::class,'Submit']);


//Google login
Route::get('login/google',[LoginController::class,'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback',[LoginController::class,'handleGoogleCallback']);

//Facebook login

Route::get('login/facebook',[LoginController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback',[LoginController::class,'handleFacebookCallback']);

//admin page
Route::get('/admindashboard',[AdminController::class,'AdminDashboard']);
Route::get('/orders',function(){
    return view('admin.orders');
});
Route::get('/AddMovies',[AdminController::class,'AddMovies']);
Route::post('/AddMovies',[AdminController::class,'AddMoviesStore']);
Route::get('/profile',[AdminController::class,'Profile']);



//forgot password
Route::get('forgot-password',[LoginController::class,'showforgotpasswordform'])->name('forgot.password.get');
Route::post('forgot-password',[LoginController::class,'submitforgotpasswordform'])->name('forgot.password.post');
Route::get('reset-password/{token}',[LoginController::class,'showresetpasswordform'])->name('reset.password.get');
Route::post('reset-password',[LoginController::class,'submitresetpasswordform'])->name('reset.password.post');




//payment

Route::post('/payment',[PaymentController::class,'PaymentStore']);

Route::post('/payments',[PaymentController::class,'PaymentSuccess']);



//Search
Route::get('/search',[LoginController::class,'Search'])->name('products.search');

//Subscription
Route::get('/subscribe',[SubscribeController::class,'Subscribe']);
Route::post('/subscribe',[SubscribeController::class,'Subscription']);

Route::post('/sub',[SubscribeController::class,'Sub']);

//Contact As
Route::get('/contact',[MoviesAddController::class,'Contacts']);

//About As
Route::get('/about',[MoviesAddController::class,'AboutUs']);


