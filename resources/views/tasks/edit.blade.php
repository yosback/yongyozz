<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Tugas') }}
            </h2>
            <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Kolom Kiri -->
                            <div class="space-y-6">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700">Judul Tugas</label>
                                    <input type="text" name="title" id="title" value="{{ old('title', $task->title ?? '') }}" 
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    @error('title')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="class_id" class="block text-sm font-medium text-gray-700">Kelas</label>
                                    <select name="class_id" id="class_id" 
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                        <option value="">Pilih Kelas</option>
                                        <!-- Loop kelas akan ditampilkan di sini -->
                                        <option value="1" {{ old('class_id', $task->class_id ?? '') == 1 ? 'selected' : '' }}>Kelas A</option>
                                        <option value="2" {{ old('class_id', $task->class_id ?? '') == 2 ? 'selected' : '' }}>Kelas B</option>
                                    </select>
                                    @error('class_id')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="deadline" class="block text-sm font-medium text-gray-700">Deadline</label>
                                    <input type="datetime-local" name="deadline" id="deadline" 
                                        value="{{ old('deadline', $task->deadline ?? '') }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    @error('deadline')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="space-y-6">
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                    <textarea name="description" id="description" rows="4" 
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $task->description ?? '') }}</textarea>
                                    @error('description')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">File Tugas Saat Ini</label>
                                    @if($task->file_path ?? false)
                                        <div class="mt-2 flex items-center space-x-3">
                                            <span class="text-sm text-gray-500">{{ basename($task->file_path) }}</span>
                                            <a href="{{ route('tasks.download', $task->id) }}" 
                                                class="text-indigo-600 hover:text-indigo-900 text-sm">Download</a>
                                            <button type="button" 
                                                onclick="if(confirm('Hapus file ini?')) document.getElementById('delete-file-form').submit();"
                                                class="text-red-600 hover:text-red-900 text-sm">Hapus</button>
                                        </div>
                                    @else
                                        <span class="text-sm text-gray-500">Tidak ada file</span>
                                    @endif
                                </div>

                                <div>
                                    <label for="task_file" class="block text-sm font-medium text-gray-700">Upload File Baru</label>
                                    <input type="file" name="task_file" id="task_file"
                                        class="mt-1 block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-md file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-indigo-50 file:text-indigo-700
                                        hover:file:bg-indigo-100">
                                    @error('task_file')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end space-x-3">
                            <button type="button" onclick="history.back()" 
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                Batal
                            </button>
                            <button type="submit" 
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>

                    @if($task->file_path ?? false)
                        <form id="delete-file-form" action="{{ route('tasks.delete-file', $task->id) }}" method="POST" class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 