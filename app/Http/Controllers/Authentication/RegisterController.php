<?php

namespace App\Http\Controllers\Authentication;

use App\Models\User;
use App\Models\Admin;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Authentication\StoreStudentRequest;
use App\Http\Requests\Authentication\StoreTeacherRequest;

class RegisterController extends Controller
{
    public $teacher, $user;

    public function __construct(Teacher $teacher, User $user)
    {
        $this->teacher = $teacher;
        $this->user = $user;
    }

    /**
     * Display the teacher registration form
     *
     * @return \Illuminate\Http\Response
     */
    public function teacherRegister()
    {
        // return view();
    }

    /**
     * Store the role teacher in the storage
     */
    public function storeTeacher(StoreTeacherRequest $request)
    {
        $result = $this->teacher->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        if (!$result) {
            return back()->with('error', 'Something went wrong, try again');
        }
        return redirect()->route('teacher.login')->with('success', 'You\'re register successfully');
    }

    /**
     * Display the teacher registration form
     *
     * @return \Illuminate\Http\Response
     */
    public function studentRegister()
    {
        // return view();
    }

    /**
     * Store the role student in the storage
     */
    public function storeStudent(StoreStudentRequest $request)
    {
        $result = $this->user->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        if (!$result) {
            return back()->with('error', 'Something went wrong, try again');
        }
        return redirect()->route('login')->with('success', 'You\'re register successfully');
    }
}
