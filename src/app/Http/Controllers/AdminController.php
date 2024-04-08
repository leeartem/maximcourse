<?php

namespace App\Http\Controllers;

use App\Models\Course;

class AdminController extends Controller
{
    public function home()
    {
        $courses = Course::with('prices')->get();

        return view('admin.home',
            [
                'courses' => $courses
            ]
        );
    }
}
