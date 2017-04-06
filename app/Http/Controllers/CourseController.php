<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Vinkla\Vimeo\Facades\Vimeo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    public function uploadVideo(Request $request){
        ini_set('max_execution_time', 180);
        ignore_user_abort(1);
        $title = $request->get('title');
        $video = $request->file('video');
        $path =  $video->getRealPath();
        $response = Vimeo::upload($path,false);
        Vimeo::request($response,['name' => $title],'PATCH');
        echo $response;
    }

    public function createCourse(Request $request){
//        print '<pre>';
//        print_r($request->all());
//        print '</pre>';
        $image = $request->file('image');
        $imageName = 'courses/' . time() . '.' . $image->getClientOriginalExtension();
        if(!$request->has('cost')){
            $cost = 0;
        }
        else{
            $cost = $request->get('cost');
        }
        if(!$request->has('saleCost')){
            $saleCost = 0;
        }
        else{
            $saleCost = $request->get('saleCost');
        }

        $course = new Course();
        $courseDetails = new CourseDetail();

        $course->id = time();
        $course->name = $request->get('title');
        $course->featuredImage = $imageName;
        $course->cost = $cost;
        $course->saleCost = $saleCost;
        $course->category_id = $request->get('category');
        $course->subcategory_id = $request->get('subcategory');
        $course->teacher_id = Auth::guard('teacher')->user()->id;

        $course->save();

        $path = 'courses';

        if (!Storage::directories($path))
        {
            Storage::makeDirectory($path);
        }

        Storage::disk('local')->put($imageName,File::get($image));

        $courseDetails->description = $request->get('desc');
        $courseDetails->courseOutcome = $request->get('outcome');
        $courseDetails->duration = $request->get('duration');
        $courseDetails->introVideo = $request->get('videoId');
        $course->courseDetails()->save($courseDetails);

        return redirect()->route('content.chapter');
    }
}
