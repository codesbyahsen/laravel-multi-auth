<?php

namespace App\Http\Controllers\TeacherAuthentication;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRegister\StoreRequest;

class RegisterController extends Controller
{
    public $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function register()
    {
        return view('teacher.auth.register');
    }

    public function store(StoreRequest $request)
    {
        $result = $this->teacher->create($request->validated());

        if (!$result) {
            return back()->with('error', 'Something went wrong, try again');
        }
        return redirect()->route('teacher.login')->with('success', 'You\'re register successfully');
    }
}
