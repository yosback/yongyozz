<x-classroom-layout>
    <div class="bg-white shadow-sm rounded-lg">
        <!-- Calendar Header -->
        <div class="border-b border-gray-200 px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <button class="px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-50 rounded-md">
                        Hari Ini
                    </button>
                    <div class="flex items-center space-x-2">
                        <button class="p-1 rounded-full hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button class="p-1 rounded-full hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-900">Maret 2024</h2>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-md">
                        Bulan
                    </button>
                    <button class="px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-md">
                        Minggu
                    </button>
                    <button class="px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-md">
                        Hari
                    </button>
                </div>
            </div>
        </div>

        <!-- Calendar Grid -->
        <div class="p-6">
            <!-- Days of Week -->
            <div class="grid grid-cols-7 gap-px mb-2">
                @foreach(['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'] as $day)
                    <div class="text-sm font-medium text-gray-500 text-center py-2">
                        {{ $day }}
                    </div>
                @endforeach
            </div>

            <!-- Calendar Days -->
            <div class="grid grid-cols-7 gap-px bg-gray-200">
                @for ($i = 0; $i < 35; $i++)
                    @php
                        $isToday = $i === 15;
                        $hasEvent = in_array($i, [10, 15, 20, 25]);
                    @endphp
                    <div class="min-h-[120px] bg-white p-2">
                        <div class="flex justify-between items-start">
                            <span class="text-sm {{ $isToday ? 'bg-blue-600 text-white w-6 h-6 rounded-full flex items-center justify-center' : 'text-gray-700' }}">
                                {{ ($i % 31) + 1 }}
                            </span>
                            @if($hasEvent)
                                <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                            @endif
                        </div>
                        @if($hasEvent)
                            <div class="mt-2">
                                <div class="text-xs bg-blue-50 text-blue-700 p-1 rounded mb-1 cursor-pointer hover:bg-blue-100">
                                    <div class="font-medium">Tugas Web Development</div>
                                    <div>09:00 - 10:00</div>
                                </div>
                                @if($i === 15)
                                    <div class="text-xs bg-green-50 text-green-700 p-1 rounded cursor-pointer hover:bg-green-100">
                                        <div class="font-medium">Quiz Mobile Dev</div>
                                        <div>13:00 - 14:00</div>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                @endfor
            </div>
        </div>

        <!-- Upcoming Events Sidebar -->
        <div class="border-t border-gray-200 p-6">
            <h3 class="text-sm font-medium text-gray-500 mb-4">Agenda Mendatang</h3>
            <div class="space-y-4">
                <!-- Event Item -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-14 text-center">
                        <div class="text-sm font-medium text-gray-900">15</div>
                        <div class="text-xs text-gray-500">Mar</div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h4 class="text-sm font-medium text-gray-900">Tugas Web Development</h4>
                            <span class="text-xs text-gray-500">09:00</span>
                        </div>
                        <p class="text-xs text-gray-600 mt-1">Web Development • Pak John Doe</p>
                    </div>
                </div>

                <!-- Event Item -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-14 text-center">
                        <div class="text-sm font-medium text-gray-900">15</div>
                        <div class="text-xs text-gray-500">Mar</div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h4 class="text-sm font-medium text-gray-900">Quiz Mobile Development</h4>
                            <span class="text-xs text-gray-500">13:00</span>
                        </div>
                        <p class="text-xs text-gray-600 mt-1">Mobile Development • Bu Sarah Smith</p>
                    </div>
                </div>

                <!-- Event Item -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-14 text-center">
                        <div class="text-sm font-medium text-gray-900">20</div>
                        <div class="text-xs text-gray-500">Mar</div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h4 class="text-sm font-medium text-gray-900">Project Data Science</h4>
                            <span class="text-xs text-gray-500">15:00</span>
                        </div>
                        <p class="text-xs text-gray-600 mt-1">Data Science • Dr. Michael Brown</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-classroom-layout> 