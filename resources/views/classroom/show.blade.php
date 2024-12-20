<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $classroom->name }}
            </h2>
            @if(Auth::id() === $classroom->instructor_id)
                <a href="{{ route('classroom.assignments.create', $classroom->id) }}" 
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add Assignment
                </a>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Course Info -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Course Information</h3>
                    <p><strong>Course:</strong> {{ $classroom->course->title }}</p>
                    <p><strong>Instructor:</strong> {{ $classroom->instructor->name }}</p>
                    <p><strong>Schedule:</strong> {{ $classroom->schedule }}</p>
                </div>
            </div>

            <!-- Assignments Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Assignments</h3>
                    
                    @if($classroom->assignments->count() > 0)
                        <div class="space-y-4">
                            @foreach($classroom->assignments as $assignment)
                                <div class="border rounded-lg p-4">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="font-semibold text-lg">{{ $assignment->title }}</h4>
                                            <p class="text-gray-600">{{ $assignment->description }}</p>
                                            <p class="text-sm text-gray-500 mt-2">Due: {{ $assignment->due_date->format('M d, Y H:i') }}</p>
                                        </div>
                                        @if(Auth::id() === $classroom->instructor_id)
                                            <div class="flex space-x-2">
                                                <a href="{{ route('classroom.assignments.edit', [$classroom->id, $assignment->id]) }}" 
                                                   class="text-blue-600 hover:text-blue-800">Edit</a>
                                                <form action="{{ route('classroom.assignments.destroy', [$classroom->id, $assignment->id]) }}" 
                                                      method="POST" 
                                                      onsubmit="return confirm('Are you sure you want to delete this assignment?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500">No assignments yet.</p>
                    @endif
                </div>
            </div>

            <!-- Students Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Students</h3>
                    @if($classroom->students->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($classroom->students as $student)
                                <div class="p-4 border rounded-lg">
                                    <p class="font-medium">{{ $student->name }}</p>
                                    <p class="text-gray-600 text-sm">{{ $student->email }}</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500">No students enrolled yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 