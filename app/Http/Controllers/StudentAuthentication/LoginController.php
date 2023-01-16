<?php

namespace App\Http\Controllers\StudentAuthentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentLogin\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('student.auth.login');
    }

    public function authenticate(AuthRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'The given credentials are invalid.');
        }
    }
}
