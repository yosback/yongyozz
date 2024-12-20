<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Classroom;
use App\Models\Assignment;

class AdminController extends Controller
{
    public function dashboard()
    {
        $courses = Course::latest()->take(5)->get();
        $classes = Classroom::all();
        $assignments = Assignment::with('classroom')->latest()->take(5)->get();
        
        return view('admin.dashboard', compact('courses', 'classes', 'assignments'));
    }

    public function courses()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function createCourseForm()
    {
        return view('admin.courses.create');
    }

    public function createCourse(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'level' => 'required|string',
            'category' => 'required|string',
        ]);

        Course::create($validated);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course created successfully');
    }

    public function editCourseForm($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.courses.edit', compact('course'));
    }

    public function editCourse(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'level' => 'required|string',
            'category' => 'required|string',
        ]);

        $course->update($validated);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course updated successfully');
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course deleted successfully');
    }

    // Class Management
    public function createClass(Request $request)
    {
        // Validasi dan simpan class
    }

    public function editClass(Request $request, $id)
    {
        // Edit class
    }

    public function deleteClass($id)
    {
        // Hapus class
    }
} 