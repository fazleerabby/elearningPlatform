<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function viewDashboard(){
        return view('teacher.dashboard');
    }
    
    public function viewCreateCourse(){
        return view('teacher.createCourse');
    }
}
