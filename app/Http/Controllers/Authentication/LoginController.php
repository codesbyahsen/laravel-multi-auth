<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Authentication\AdminAuthenticateRequest;
use App\Http\Requests\Authentication\StudentAuthenticateRequest;
use App\Http\Requests\Authentication\TeacherAuthenticateRequest;

class LoginController extends Controller
{
    /**
     * Admin login page
     *
     * @return \Illuminate\Http\Response
     */
    public function adminLogin()
    {
        return view('admin.auth.login');
    }

    /**
     * Authenticate the role admin
     *
     * @param  \App\Http\Requests\Authentication\AdminAuthenticateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function adminAuthenticate(AdminAuthenticateRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'The given credentials are invalid.');
        }
    }

    /**
     * Teacher login page
     *
     * @return \Illuminate\Http\Response
     */
    public function teacherLogin()
    {
        return view('teacher.auth.login');
    }

    /**
     * Authenticate the role teacher
     *
     * @param  \App\Http\Requests\Authentication\TeacherAuthenticateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function teacherAuthenticate(TeacherAuthenticateRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('teacher')->attempt($credentials)) {
            return redirect()->route('teacher.dashboard');
        } else {
            return back()->with('error', 'The given credentials are invalid.');
        }
    }

    /**
     * Student login page
     *
     * @return \Illuminate\Http\Response
     */
    public function studentLogin()
    {
        return view('student.auth.login');
    }

    /**
     * Authenticate the role student
     *
     * @param  \App\Http\Requests\Authentication\StudentAuthenticateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function studentAuthenticate(StudentAuthenticateRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'The given credentials are invalid.');
        }
    }
}
