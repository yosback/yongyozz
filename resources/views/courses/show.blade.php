<x-classroom-layout>
    <div class="bg-white shadow-sm rounded-lg">
        <!-- Course Header -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-6">
            <div class="max-w-3xl">
                <h1 class="text-3xl font-bold">{{ $course['title'] }}</h1>
                <p class="mt-2 text-blue-100">{{ $course['description'] }} • {{ $course['price'] }}</p>
            </div>
        </div>

        <!-- Course Content -->
        <div class="p-6">
            <div class="space-y-8">
                @foreach($course['modules'] as $module)
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <div class="p-4 bg-gray-50 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $module['title'] }}</h3>
                        </div>
                        <div class="divide-y divide-gray-200">
                            @foreach($module['materials'] as $material)
                                <div class="p-4 hover:bg-gray-50">
                                    <div class="flex items-start space-x-4">
                                        <div class="flex-shrink-0">
                                            <span class="flex items-center justify-center h-10 w-10 rounded-lg 
                                                {{ $material['type'] === 'video' ? 'bg-blue-100 text-blue-600' : '' }}
                                                {{ $material['type'] === 'reading' ? 'bg-green-100 text-green-600' : '' }}
                                                {{ $material['type'] === 'interactive' ? 'bg-purple-100 text-purple-600' : '' }}
                                                {{ $material['type'] === 'quiz' ? 'bg-yellow-100 text-yellow-600' : '' }}">
                                                @if($material['type'] === 'video')
                                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                @elseif($material['type'] === 'reading')
                                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                    </svg>
                                                @elseif($material['type'] === 'interactive')
                                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                                    </svg>
                                                @else
                                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                    </svg>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between">
                                                <h4 class="text-base font-medium text-gray-900">{{ $material['title'] }}</h4>
                                                <span class="text-sm text-gray-500">{{ $material['duration'] }}</span>
                                            </div>
                                            <p class="mt-1 text-sm text-gray-500">{{ ucfirst($material['type']) }}</p>
                                        </div>
                                        <button class="text-blue-600 hover:bg-blue-50 px-4 py-2 rounded-lg text-sm font-medium
                                            {{ $material['status'] === 'locked' ? 'opacity-50 cursor-not-allowed' : '' }}">
                                            {{ $material['status'] === 'locked' ? 'Terkunci' : 'Mulai' }}
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-classroom-layout> 