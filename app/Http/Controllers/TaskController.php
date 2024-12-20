<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', 'all');

        // Sample tasks data
        $tasks = [
            'Web Development' => [
                [
                    'title' => 'Quiz HTML Dasar',
                    'module' => 'Modul 1',
                    'teacher' => 'Pak John Doe',
                    'deadline' => now()->addDays(2),
                    'type' => 'quiz',
                    'details' => '20 Soal • 30 menit',
                    'points' => 100,
                    'status' => 'pending'
                ],
                [
                    'title' => 'Project: Landing Page',
                    'module' => 'Modul 1',
                    'teacher' => 'Pak John Doe',
                    'deadline' => now()->subDays(1),
                    'type' => 'project',
                    'points' => 100,
                    'status' => 'completed',
                    'score' => 90
                ],
            ],
            'Mobile Development' => [
                [
                    'title' => 'Quiz Flutter Basic',
                    'module' => 'Modul 1',
                    'teacher' => 'Bu Sarah Smith',
                    'deadline' => now(),
                    'type' => 'quiz',
                    'details' => '15 Soal • 20 menit',
                    'points' => 50,
                    'status' => 'pending'
                ],
            ]
        ];

        // Apply filter
        if ($filter !== 'all') {
            foreach ($tasks as $className => $classTasks) {
                $tasks[$className] = array_filter($classTasks, function($task) use ($filter) {
                    if ($filter === 'pending') {
                        return $task['status'] === 'pending';
                    }
                    if ($filter === 'completed') {
                        return $task['status'] === 'completed';
                    }
                    return true;
                });
            }
        }

        return view('tasks.index', [
            'tasks' => $tasks,
            'currentFilter' => $filter
        ]);
    }
} 