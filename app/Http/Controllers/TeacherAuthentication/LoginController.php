<?php

namespace App\Http\Controllers\TeacherAuthentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TeacherLogin\AuthRequest;

class LoginController extends Controller
{
    public function login()
    {
        return view('teacher.auth.login');
    }

    public function authenticate(AuthRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('teacher')->attempt($credentials)) {
            return redirect()->route('teacher.dashboard');
        } else {
            return back()->with('error', 'The given credentials are invalid.');
        }
    }
}
