<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tugas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Status Message -->
            <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-6">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-blue-400"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-blue-700">
                            Fitur tugas sedang dalam pengembangan. Segera Anda akan dapat melihat dan mengatur tugas-tugas Anda di sini.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tasks Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Tasks Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Daftar Tugas</h3>
                        <div class="flex gap-2">
                            <select class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="all">Semua Status</option>
                                <option value="pending">Belum Selesai</option>
                                <option value="completed">Selesai</option>
                            </select>
                        </div>
                    </div>

                    <!-- Placeholder Content -->
                    <div class="text-center py-8">
                        <div class="mb-4">
                            <i class="fas fa-tasks text-4xl text-gray-400"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Tugas</h3>
                        <p class="text-gray-500">Tugas-tugas Anda akan muncul di sini setelah Anda mulai mengikuti kursus</p>
                    </div>

                    <!-- Template untuk tampilan tugas nanti -->
                    <div class="hidden">
                        <!-- @foreach($tasks as $task) -->
                        <div class="border-b border-gray-200 py-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-gray-900">[Judul Tugas]</h4>
                                    <p class="text-sm text-gray-500">[Deskripsi Tugas]</p>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="px-3 py-1 text-sm rounded-full bg-yellow-100 text-yellow-800">
                                        [Status]
                                    </span>
                                    <button class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- @endforeach -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 