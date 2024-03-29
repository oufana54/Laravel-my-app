
<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('app_home');
    Route::get('/about', 'about') ->name('app_about');
    Route::match(['get','post'],'/dashboard', 'dashboard')->Middleware('auth')->name('app_dashboard'); 
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/logout', 'logout')->name('app_logout');
    Route::post('/exist_email','existEmail')->name('app_exist_email');
    Route::match(['get','post'],'/activition_code/{token}','ActivationCode')->name('app_activation_code');
    Route::get('/user_checker', 'userChecker')->name('app_user_checker');  
    Route::get('/resend_activation_code/{token}', 'resendActivationCode')->name('app_resend_activition_code');    
    Route::get('/activation_account_link/{token}', 'activationAccountLink')->name('app_activition_account_link');   
    Route::match(['get','post'],'/activation_account_change_email/{token}', 'ActivationAccountChangeEmail')->name('app_activation_account_change_email'); 
    Route::match(['get','post'],'/forgot_password','forgotPassword')->name('app_forgotpassword');
       
});


  