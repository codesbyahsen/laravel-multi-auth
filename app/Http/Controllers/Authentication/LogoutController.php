<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Destroy the admin session
     *
     * @return \Illuminate\Http\Response
     */
    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        Session::flush();

        return redirect()->route('admin.login');
    }

    /**
     * Destroy the teacher session
     *
     * @return \Illuminate\Http\Response
     */
    public function teacherLogout()
    {
        Auth::guard('teacher')->logout();
        Session::flush();

        return redirect()->route('teacher.login');
    }

    /**
     * Destroy the student session
     *
     * @return \Illuminate\Http\Response
     */
    public function studentLogout()
    {
        Auth::guard('web')->logout();
        Session::flush();

        return redirect()->route('student.login');
    }
}
