<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Str;
use Database\Seeders\AdminSeeder;
use Database\Seeders\CourseSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            CourseSeeder::class,
        ]);
    }
}
