<?php

namespace App\Http\Controllers\TeacherAuthentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function passwordReset()
    {
        return view('teacher.auth.reset-password');
    }

    public function sendResetLink()
    {
        //
    }
}
