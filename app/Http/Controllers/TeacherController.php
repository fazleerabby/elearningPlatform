<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function newMentor(request $request){

        $this->validate($request,[
            'email'  => 'email|unique:teachers',
            'password'  =>  'min:8'
        ]);

        $firstName = trim($request->get('firstName'));
        $lastName = trim($request->get('lastName'));
        $email = trim($request->get('email'));
        $password = bcrypt(trim($request->get('password')));
        $id = time();

        $teacher = new Teacher();
        $teacherDetails = new UserDetail();
        $teacher->id = $id;
        $teacher->email = $email;
        $teacher->password = $password;
        $teacher->hash = md5($id);
        $teacher->isActive = 0;
        $teacher->isBlock = 0;
        $teacherDetails->firstName = $firstName;
        $teacherDetails->lastName = $lastName;

        $teacher->save();
        $teacher->teacherDetails()->save($teacherDetails);
        return redirect()->route('mentor.success');
    }

    public function login(Request $request){
        if(Auth::guard('teacher')->attempt(['email' => $request->get('email'), 'password' => $request->get('password')])){
            return redirect()->route('mentor.dashboard');
        }
        return redirect()->back();
    }

    public function success(){
        echo 'Please Activate email';
    }
}
