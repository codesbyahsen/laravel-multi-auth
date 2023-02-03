<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\AdminResetPasswordRequest;
use App\Http\Requests\Authentication\StudentResetPasswordRequest;
use App\Http\Requests\Authentication\TeacherResetPasswordRequest;

class ResetPasswordController extends Controller
{
    /**
     * Show admin create new password form
     *
     * @return \Illuminate\Http\Response
     */
    public function createAdminNewPassword()
    {
        return view('admin.auth.create-new-password');
    }

    /**
     * Update a admin password
     *
     * @param  \App\Http\Requests\Authentication\AdminResetPasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function updateAdminNewPassword(AdminResetPasswordRequest $request)
    {
        //
    }

    /**
     * Show teacher create new password form
     *
     * @return \Illuminate\Http\Response
     */
    public function createTeacherNewPassword()
    {
        return view('teacher.auth.create-new-password');
    }

    /**
     * Update a teacher password
     *
     * @param  \App\Http\Requests\Authentication\TeachertResetPasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function updateTeacherNewPassword(TeacherResetPasswordRequest $request)
    {
        //
    }

    /**
     * Show student create new password form
     *
     * @return \Illuminate\Http\Response
     */
    public function createStudentNewPassword()
    {
        return view('student.auth.create-new-password');
    }

    /**
     * Update a student password
     *
     * @param  \App\Http\Requests\Authentication\StudentResetPasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function updateStudentNewPassword(StudentResetPasswordRequest $request)
    {
        //
    }
}
