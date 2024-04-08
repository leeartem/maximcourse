<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Price;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses()
    {
        $courses = Course::query()
            ->with('prices')
            ->get();

        return view('course', [
            'courses' => $courses,
        ]);
    }

    public function course(int $id)
    {
        $course = Course::find($id);
        dd($course);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function createSubmit(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|min:5',
            'description' => 'required|string|min:5',
            'prices' => 'required|array',
        ]);

        $course = Course::query()->create(
            [
                'title' => $request->title,
                'description' => $request->description,
                'tags' => ['protein']
            ]
        );

        Price::query()->create(
            [
                'currency' => 'RUB',
                'amount' => (float) $request->prices['rub'],
                'course_id' => $course->id,
            ]
        );

        Price::query()->create(
            [
                'currency' => 'USD',
                'amount' => (float) $request->prices['usd'],
                'course_id' => $course->id,
            ]
        );

        return redirect()->route('admin.home');
    }
}
