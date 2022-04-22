<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Authcontroller;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

//Route::get('/', function () {
 //   return view('welcome');
//});
//Route::get('login', [Authcontroller::class, 'index'])->name('login');
//Route::post('post-login', [Authcontroller::class, 'postLogin'])->name('login.post'); 
//Route::get('registration', [Authcontroller::class, 'registration'])->name('register');
//Route::post('post-registration', [Authcontroller::class, 'postRegistration'])->name('register.post'); 
//Route::get('dashboard', [Authcontroller::class, 'dashboard']); 
//Route::get('logout', [Authcontroller::class, 'logout'])->name('logout');
//Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
//Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
//Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
//Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/', function (){
    return view('healthform1');
});