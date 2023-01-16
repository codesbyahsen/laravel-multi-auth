<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

        return redirect()->route('admin.login');
    }
}
