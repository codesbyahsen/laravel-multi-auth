<?php

namespace App\Http\Controllers\StudentAuthentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function passwordReset()
    {
        return view('student.auth.reset-password');
    }

    public function sendResetLink()
    {
        //
    }
}
