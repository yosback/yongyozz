<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Get statistics
        $stats = [
            'users' => User::count(),
            'courses' => Course::count(),
            'tasks' => DB::table('materials')
                        ->where('type', 'quiz')
                        ->orWhere('type', 'interactive')
                        ->count()
        ];
        
        // Get latest courses for table
        $courses = Course::with('instructor')
                        ->latest()
                        ->take(5)
                        ->get();

        return view('admin.dashboard', compact('stats', 'courses'));
    }
} 