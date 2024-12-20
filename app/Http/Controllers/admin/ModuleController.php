<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function store(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'order' => 'required|integer|min:1'
        ]);

        $course->modules()->create($validated);

        return back()->with('success', 'Module created successfully');
    }

    public function update(Request $request, Course $course, Module $module)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'order' => 'required|integer|min:1'
        ]);

        $module->update($validated);

        return back()->with('success', 'Module updated successfully');
    }

    public function destroy(Course $course, Module $module)
    {
        $module->delete();
        return back()->with('success', 'Module deleted successfully');
    }
} 