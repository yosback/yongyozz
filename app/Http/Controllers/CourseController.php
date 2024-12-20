<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('dashboard', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'total_materials' => 'required|integer',
            'color_scheme' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('public/courses', $imageName);
            $validated['image'] = 'courses/' . $imageName;
        }

        $validated['slug'] = Str::slug($validated['title']);
        
        Course::create($validated);

        return redirect()->route('dashboard')->with('success', 'Course created successfully');
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'total_materials' => 'required|integer',
            'color_scheme' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('public/courses', $imageName);
            $validated['image'] = 'courses/' . $imageName;
        }

        $validated['slug'] = Str::slug($validated['title']);
        
        $course->update($validated);

        return redirect()->route('dashboard')->with('success', 'Course updated successfully');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('dashboard')->with('success', 'Course deleted successfully');
    }

    public function search(Request $request)
    {
        return view('dashboard');
    }
}