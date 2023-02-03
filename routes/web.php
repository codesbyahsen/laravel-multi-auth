<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\LogoutController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\Authentication\ForgotPasswordController;
use App\Http\Controllers\Authentication\ResetPasswordController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'adminLogin'])->name('admin.login');
    Route::post('/authenticate', [LoginController::class, 'adminAuthenticate'])->name('admin.authenticate');

    Route::get('/password-reset', [ForgotPasswordController::class, 'adminResetPassword'])->name('admin.forgot_password');
    Route::post('/password-reset', [ForgotPasswordController::class, 'sendAdminResetLink'])->name('admin.send_reset_link');

    Route::get('/new-password/{token}', [ResetPasswordController::class, 'createAdminNewPassword'])->name('admin.create_new_password');
    Route::post('/new-password', [ResetPasswordController::class, 'updateAdminNewPassword'])->name('admin.update_new_password');

    Route::get('/logout', [LogoutController::class, 'adminLogout'])->name('admin.logout');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});


Route::prefix('tr')->group(function () {
    Route::get('/registration', [RegisterController::class, 'teacherRegister'])->name('teacher.register');
    Route::post('/registration', [RegisterController::class, 'storeTeacher'])->name('teacher.store');
    Route::get('/login', [LoginController::class, 'teacherLogin'])->name('teacher.login');
    Route::post('/authenticate', [LoginController::class, 'teacherAuthenticate'])->name('teacher.authenticate');

    Route::get('/password-reset', [ForgotPasswordController::class, 'teacherResetPassword'])->name('teacher.forgot_password');
    Route::post('/password-reset', [ForgotPasswordController::class, 'sendTeacherResetLink'])->name('teacher.send_reset_link');

    Route::get('/new-password/{token}', [ResetPasswordController::class, 'createTeacherNewPassword'])->name('teacher.create_new_password');
    Route::post('/new-password', [ResetPasswordController::class, 'updateTeacherNewPassword'])->name('teacher.update_new_password');

    Route::get('/logout', [LogoutController::class, 'teacherLogout'])->name('admin.logout');

    Route::get('/dashboard', [DashboardController::class, 'teacherDashboard'])->name('teacher.dashboard');
});


Route::get('/registration', [RegisterController::class, 'studentRegister'])->name('student.register');
Route::post('/registration', [RegisterController::class, 'storeStudent'])->name('student.store');
Route::get('/login', [LoginController::class, 'studentLogin'])->name('login');
Route::post('/authenticate', [LoginController::class, 'studentAuthenticate'])->name('authenticate');

Route::get('/password-reset', [ForgotPasswordController::class, 'studentResetPassword'])->name('forgot_password');
Route::post('/password-reset', [ForgotPasswordController::class, 'sendStudentResetLink'])->name('send_reset_link');

Route::get('/new-password/{token}', [ResetPasswordController::class, 'createStudentNewPassword'])->name('create_new_password');
Route::post('/new-password', [ResetPasswordController::class, 'updateStudentNewPassword'])->name('update_new_password');

Route::get('/logout', [LogoutController::class, 'studentLogout'])->name('admin.logout');
Route::get('/dashboard', [DashboardController::class, 'studentDashboard'])->name('dashboard');
