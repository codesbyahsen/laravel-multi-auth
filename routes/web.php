<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuthentication\RegisterController;
use App\Http\Controllers\StudentAuthentication\LoginController;
use App\Http\Controllers\StudentAuthentication\LogoutController;
use App\Http\Controllers\StudentAuthentication\ForgotPasswordController;
use App\Http\Controllers\StudentAuthentication\ResetPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\Auth\LogoutController as AdminLogoutController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController as AdminResetPasswordController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController as AdminForgotPasswordController;
use App\Http\Controllers\TeacherAuthentication\RegisterController as TeacherRegisterController;
use App\Http\Controllers\TeacherAuthentication\LoginController as TeacherLoginController;
use App\Http\Controllers\TeacherAuthentication\LogoutController as TeacherLogoutController;
use App\Http\Controllers\TeacherAuthentication\ForgotPasswordController as TeacherForgotPasswordController;
use App\Http\Controllers\TeacherAuthentication\ResetPasswordController as TeacherResetPasswordController;

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

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');

    Route::get('/password-reset', [AdminForgotPasswordController::class, 'passwordReset'])->name('admin.forgot_password');
    Route::post('/password-reset', [AdminForgotPasswordController::class, 'sendResetLink'])->name('admin.send_reset_link');

    Route::get('/new-password/{token}', [AdminResetPasswordController::class, 'createNewPassword'])->name('admin.create_new_password');
    Route::post('/new-password', [AdminResetPasswordController::class, 'updateNewPassword'])->name('admin.update_new_password');

    Route::get('/logout', [AdminLogoutController::class, 'logout'])->name('admin.logout');
});


Route::prefix('tr')->group(function () {
    Route::get('/registration', [TeacherRegisterController::class, 'register'])->name('teacher.register');
    Route::post('/registration', [TeacherRegisterController::class, 'store'])->name('teacher.store');
    Route::get('/login', [TeacherLoginController::class, 'login'])->name('teacher.login');
    Route::post('/authenticate', [TeacherLoginController::class, 'authenticate'])->name('teacher.authenticate');

    Route::get('/password-reset', [TeacherForgotPasswordController::class, 'passwordReset'])->name('teacher.forgot_password');
    Route::post('/password-reset', [TeacherForgotPasswordController::class, 'sendResetLink'])->name('teacher.send_reset_link');

    Route::get('/new-password/{token}', [TeacherResetPasswordController::class, 'createNewPassword'])->name('teacher.create_new_password');
    Route::post('/new-password', [TeacherResetPasswordController::class, 'updateNewPassword'])->name('teacher.update_new_password');

    Route::get('/logout', [TeacherLogoutController::class, 'logout'])->name('admin.logout');
});


Route::get('/registration', [RegisterController::class, 'register'])->name('student.register');
Route::post('/registration', [RegisterController::class, 'store'])->name('student.store');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/password-reset', [ForgotPasswordController::class, 'passwordReset'])->name('forgot_password');
Route::post('/password-reset', [ForgotPasswordController::class, 'sendResetLink'])->name('send_reset_link');

Route::get('/new-password/{token}', [ResetPasswordController::class, 'createNewPassword'])->name('create_new_password');
Route::post('/new-password', [ResetPasswordController::class, 'updateNewPassword'])->name('update_new_password');

Route::get('/logout', [LogoutController::class, 'logout'])->name('admin.logout');
