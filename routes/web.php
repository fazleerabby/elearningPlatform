<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/mentorSignup',[
    'uses'  =>  'TeacherController@newMentor',
    'as'    =>  'mentor.signup'
]);

Route::post('/mentorLogin',[
    'uses'  =>  'TeacherController@login',
    'as'    =>  'mentor.mentorLogin'
]);

Route::get('mentor/login', function(){
    return view('teacher.login');
})->name('mentor.login');

Route::get('mentor/success',[
    'uses'  =>  'TeacherController@success',
    'as'    =>  'mentor.success'
]);

Route::group(['prefix' => 'mentor', 'middleware' => 'teacher'], function(){

    Route::get('/dashboard', function(){
        return view('teacher.dashboard');
    })->name('mentor.dashboard');

    Route::get('/course/new', function(){
        return view('teacher.createCourse');
    })->name('course.new');

    Route::get('/content', function(){
        return view('teacher.content');
    })->name('content');

    Route::get('/content/chapter', function(){
        return view('teacher.courseContent');
    })->name('content.chapter');

    Route::get('/content/chapter/lesson', function(){
        return view('teacher.courseLesson');
    })->name('content.lesson');

    Route::get('/content/chapter/lesson/new', function(){
        return view('teacher.createLesson');
    })->name('content.new');
});
