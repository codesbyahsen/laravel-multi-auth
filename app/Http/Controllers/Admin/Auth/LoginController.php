<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminLogin\AuthRequest;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function authenticate(AuthRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'The given credentials are invalid.');
        }
    }
}
