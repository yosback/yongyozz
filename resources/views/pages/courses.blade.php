@extends('layouts.app')

@section('content')
<div class="bg-gray-100">
    <!-- Header -->
    <div class="bg-indigo-700 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Kursus Tersedia</h1>
            <p class="text-xl">Pilih kursus yang sesuai dengan tujuan karirmu</p>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap gap-4 mb-8">
            <a href="{{ url('/courses') }}" class="px-4 py-2 {{ request()->is('courses') && !request()->query('category') ? 'bg-indigo-600 text-white' : 'bg-white text-gray-700' }} rounded-full hover:bg-indigo-700 hover:text-white">Semua Kursus</a>
            <a href="{{ url('/courses?category=web-development') }}" class="px-4 py-2 {{ request()->query('category') == 'web-development' ? 'bg-indigo-600 text-white' : 'bg-white text-gray-700' }} rounded-full hover:bg-indigo-700 hover:text-white">Web Development</a>
            <a href="{{ url('/courses?category=mobile-development') }}" class="px-4 py-2 {{ request()->query('category') == 'mobile-development' ? 'bg-indigo-600 text-white' : 'bg-white text-gray-700' }} rounded-full hover:bg-indigo-700 hover:text-white">Mobile Development</a>
            <a href="{{ url('/courses?category=data-science') }}" class="px-4 py-2 {{ request()->query('category') == 'data-science' ? 'bg-indigo-600 text-white' : 'bg-white text-gray-700' }} rounded-full hover:bg-indigo-700 hover:text-white">Data Science</a>
            <a href="{{ url('/courses?category=ui-ux-design') }}" class="px-4 py-2 {{ request()->query('category') == 'ui-ux-design' ? 'bg-indigo-600 text-white' : 'bg-white text-gray-700' }} rounded-full hover:bg-indigo-700 hover:text-white">UI/UX Design</a>
        </div>

        <!-- Courses Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($courses as $slug => $course)
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://source.unsplash.com/800x600/?{{ $course['category'] }}" alt="{{ $course['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded">{{ $course['level'] }}</span>
                            <span class="ml-2 text-gray-600">• {{ $course['duration'] }}</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $course['title'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $course['description'] }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-indigo-600 font-semibold">{{ $course['price'] }}</span>
                            <a href="{{ url('/courses/' . $slug) }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Detail Kursus</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12">
                    <h3 class="text-xl text-gray-600">Tidak ada kursus yang tersedia untuk kategori ini.</h3>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection 