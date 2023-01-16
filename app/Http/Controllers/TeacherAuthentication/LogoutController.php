<?php

namespace App\Http\Controllers\TeacherAuthentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Logout the session
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('teacher.login');
    }
}
