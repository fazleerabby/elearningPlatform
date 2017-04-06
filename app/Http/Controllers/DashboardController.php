<?php

namespace App\Http\Controllers;

use App\Category;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function viewDashboard(){
        $teacher = Teacher::find(Auth::guard('teacher')->user()->id);
        return view('teacher.dashboard')->with('lastName',ucfirst($teacher->teacherDetails->lastName));
    }
    
    public function viewCreateCourse(){
        $category = Category::all();
        return view('teacher.createCourse')->with('categories',$category);
    }
    
    public function viewCourseContent(){
        return view('teacher.courseContent');
    }
}
