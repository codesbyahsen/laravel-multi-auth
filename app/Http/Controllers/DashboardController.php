<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function studentDashboard()
    {
        return view('student.modules.dashboard.index');
    }

    public function teacherDashboard()
    {
        return view('teacher.modules.dashboard.index');
    }
}
