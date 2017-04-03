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

Route::get('mentor/confirmEmail/{id}/{hash}',[
    'uses'  =>  'TeacherController@mailConfirm',
    'as'    =>  'mentor.confirm'
]);

Route::group(['prefix' => 'mentor', 'middleware' => 'teacher'], function(){

    Route::get('/dashboard',[
        'uses'  => 'DashboardController@viewDashboard',
        'as'    => 'mentor.dashboard'
    ]);

    Route::get('/course/new', [
        'uses'  =>  'DashboardController@viewCreateCourse',
        'as'    =>  'course.new'
    ]);

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
