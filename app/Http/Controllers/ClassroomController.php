<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassroomController extends Controller
{
    public function show($id)
    {
        $classroom = Classroom::with(['course', 'instructor', 'students', 'materials', 'assignments'])
            ->findOrFail($id);
            
        return view('classroom.show', compact('classroom'));
    }

    public function create()
    {
        return view('classroom.create');
    }

    public function store(Request $request)
    {
        // Validasi dan simpan classroom
    }

    public function join($id)
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        
        $classroom = Classroom::findOrFail($id);
        $classroom->students()->attach(Auth::id());

        return redirect()->back()->with('success', 'Successfully joined the classroom');
    }

    public function createAssignment($classroomId)
    {
        $classroom = Classroom::findOrFail($classroomId);
        
        // Hanya instructor yang bisa membuat tugas
        if (Auth::id() !== $classroom->instructor_id) {
            return redirect()->back()->with('error', 'Unauthorized action');
        }
        
        return view('classroom.assignments.create', compact('classroom'));
    }

    public function storeAssignment(Request $request, $classroomId)
    {
        $classroom = Classroom::findOrFail($classroomId);
        
        if (Auth::id() !== $classroom->instructor_id) {
            return redirect()->back()->with('error', 'Unauthorized action');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date|after:now'
        ]);

        $assignment = $classroom->assignments()->create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'due_date' => $validated['due_date']
        ]);

        return redirect()->route('classroom.show', $classroom->id)
            ->with('success', 'Assignment created successfully');
    }

    public function editAssignment($classroomId, $assignmentId)
    {
        $classroom = Classroom::findOrFail($classroomId);
        $assignment = Assignment::findOrFail($assignmentId);
        
        if (Auth::id() !== $classroom->instructor_id) {
            return redirect()->back()->with('error', 'Unauthorized action');
        }

        return view('classroom.assignments.edit', compact('classroom', 'assignment'));
    }

    public function updateAssignment(Request $request, $classroomId, $assignmentId)
    {
        $classroom = Classroom::findOrFail($classroomId);
        $assignment = Assignment::findOrFail($assignmentId);
        
        if (Auth::id() !== $classroom->instructor_id) {
            return redirect()->back()->with('error', 'Unauthorized action');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date'
        ]);

        $assignment->update($validated);

        return redirect()->route('classroom.show', $classroom->id)
            ->with('success', 'Assignment updated successfully');
    }

    public function deleteAssignment($classroomId, $assignmentId)
    {
        $classroom = Classroom::findOrFail($classroomId);
        $assignment = Assignment::findOrFail($assignmentId);
        
        if (Auth::id() !== $classroom->instructor_id) {
            return redirect()->back()->with('error', 'Unauthorized action');
        }

        $assignment->delete();

        return redirect()->route('classroom.show', $classroom->id)
            ->with('success', 'Assignment deleted successfully');
    }
} 