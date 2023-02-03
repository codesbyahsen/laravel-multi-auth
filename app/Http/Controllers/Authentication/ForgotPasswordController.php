<?php

namespace App\Http\Controllers\Authentication;

use App\Models\User;
use App\Models\Admin;
use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\AdminForgotPasswordRequest;
use App\Http\Requests\Authentication\StudentForgotPasswordRequest;
use App\Http\Requests\Authentication\TeacherForgotPasswordRequest;

class ForgotPasswordController extends Controller
{
    public $admin, $teacher, $user;

    public function __construct(Admin $admin, Teacher $teacher, User $user)
    {
        $this->admin = $admin;
        $this->teacher = $teacher;
        $this->user = $user;
    }
    /**
     * Display a admin reset password form with
     * input that accepts email.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminResetPassword()
    {
        return view('admin.auth.reset-password');
    }

    /**
     * Send a link with a token to admin reset password
     *
     * @param  \App\Http\Requests\AuthAdmin\AdminForgotPasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function sendAdminResetLink(AdminForgotPasswordRequest $request)
    {
        $adminDetails = $this->admin->where('email', $request->email)->first();
        $email = $request->email;

        if ($adminDetails) {
            $token = Str::random(64);
            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => $token,
                'created_at' => now()
            ]);

            $link = route('admin.create_new_password', $token);

            return back();
        } else {
            return back()->withErrors(['email' => 'The email is invalid']);
        }
    }

    /**
     * Display a teacher reset password form with
     * input that accepts email.
     *
     * @return \Illuminate\Http\Response
     */
    public function teacherResetPassword()
    {
        return view('teacher.auth.reset-password');
    }

    /**
     * Send a link with a token to admin reset password
     *
     * @param  \App\Http\Requests\Authentication\TeacherForgotPasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function sendTeacherResetLink(TeacherForgotPasswordRequest $request)
    {

    }

    /**
     * Display a student reset password form with
     * input that accepts email.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentResetPassword()
    {
        return view('student.auth.reset-password');
    }

    /**
     * Send a link with a token to admin reset password
     *
     * @param  \App\Http\Requests\AuthAdmin\StudentForgotPasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function sendStudentResetLink(StudentForgotPasswordRequest $request)
    {

    }
}
