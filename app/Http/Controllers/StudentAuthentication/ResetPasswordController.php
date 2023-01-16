<?php

namespace App\Http\Controllers\StudentAuthentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function createNewPassword()
    {
        return view('student.auth.create-new-password');
    }

    public function updateNewPassword()
    {
        //
    }
}
