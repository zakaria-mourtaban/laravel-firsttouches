<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller {
    function get_courses() {
        $courses = Course::all();

        return response()->json([
            "courses" => $courses
        ]);
    }

    function get_course($id) {
        $course = Course::find($id);

        return response()->json([
            "course" => $course
        ]);
    }

    function create_course(Request $request) {
        $course = Course::create([
            "name" => $request->name,
            "code" => $request->code,
            "credit" => $request->credit,
            "schedule" => $request->schedule,
        ]);

        return response()->json([
            "new_course" => $course
        ]);
    }

    function update_course($id,Request $request,) {
        $course = Course::find($id)->update([
            "name" => $request->name,
            "code" => $request->code,
            "credit" => $request->credit,
            "schedule" => $request->schedule,
        ]);

        return response()->json([
            "updated_course" => $course
        ]);
    }

    function delete_course($id) {
        $course = Course::find($id)->delete();

        return response()->json([
            "deleted_course" => $course
        ]);
    }
}