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

    Route::get('/content/chapter',[
        'uses'  => 'DashboardController@viewCourseContent',
        'as'    => 'content.chapter'
    ]);

    Route::get('/content/chapter/lesson', function(){
        return view('teacher.courseLesson');
    })->name('content.lesson');

    Route::get('/content/chapter/lesson/new', function(){
        return view('teacher.createLesson');
    })->name('content.new');

    Route::post('/course/new/create',[
        'uses'  =>  'CourseController@createCourse',
        'as'    =>  'course.create'
    ]);

    Route::post('/course/video/upload',[
        'uses'  =>  'CourseController@uploadVideo',
        'as'    =>  'upload.video'
    ]);

    Route::post('/subcategory/generate',[
        'uses'  =>  'ajaxController@getSubcategory',
        'as'    =>  'generate.subcategory'
    ]);
});
