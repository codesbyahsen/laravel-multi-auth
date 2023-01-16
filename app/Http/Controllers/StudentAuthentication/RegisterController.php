<?php

namespace App\Http\Controllers\StudentAuthentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRegister\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register()
    {
        return view('student.auth.register');
    }

    public function store(StoreRequest $request)
    {
        $result = $this->user->create($request->validated());

        if (!$result) {
            return back()->with('error', 'Something went wrong, try again');
        }
        return redirect()->route('login')->with('success', 'You\'re register successfully');
    }
}
