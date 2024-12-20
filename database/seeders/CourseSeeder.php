<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'title' => 'Web Development',
                'description' => 'Learn web development from scratch',
                'slug' => 'web-development',
            ],
            [
                'title' => 'Mobile Development',
                'description' => 'Learn mobile app development',
                'slug' => 'mobile-development',
            ],
            [
                'title' => 'Data Science',
                'description' => 'Learn data science and analytics',
                'slug' => 'data-science',
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
} 