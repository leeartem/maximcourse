<?php

namespace Database\Seeders;

use App\Models\Course;
use Database\Factories\CourseFactory;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::factory(5)->create();
    }
}
