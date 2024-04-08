<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Price;
use Database\Factories\CourseFactory;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run()
    {
        $course = Course::get();

        foreach ($course as $course) {
            Price::create(
                [
                    'course_id' => $course->id,
                    'currency' => 'RUB',
                    'amount' => 500,
                ]
            );

            Price::create(
                [
                    'course_id' => $course->id,
                    'currency' => 'USD',
                    'amount' => 5,
                ]
            );
        }
    }
}
