<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminAssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::with(['classroom'])->latest()->paginate(10);
        return view('admin.assignments.index', compact('assignments'));
    }

    public function create()
    {
        $classrooms = Classroom::all();
        return view('admin.assignments.create', compact('classrooms'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date|after:now',
            'classroom_id' => 'required|exists:classrooms,id'
        ]);

        Assignment::create($validated);

        return redirect()->route('admin.assignments.index')
            ->with('success', 'Assignment created successfully');
    }

    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        $classrooms = Classroom::all();
        return view('admin.assignments.edit', compact('assignment', 'classrooms'));
    }

    public function update(Request $request, $id)
    {
        $assignment = Assignment::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'classroom_id' => 'required|exists:classrooms,id'
        ]);

        $assignment->update($validated);

        return redirect()->route('admin.assignments.index')
            ->with('success', 'Assignment updated successfully');
    }

    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->delete();

        return redirect()->route('admin.assignments.index')
            ->with('success', 'Assignment deleted successfully');
    }
} 