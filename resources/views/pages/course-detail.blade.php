@extends('layouts.app')

@section('content')
<div class="bg-gray-100">
    <!-- Course Header -->
    <div class="bg-indigo-700 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-4">
                <a href="{{ url('/courses') }}" class="text-white hover:text-indigo-200">
                    <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Daftar Kursus
                </a>
            </div>
            <span class="bg-indigo-800 text-white text-sm px-3 py-1 rounded-full">{{ $category ?? 'Web Development' }}</span>
            <h1 class="text-4xl font-bold mt-4 mb-4">{{ $title ?? 'Web Development Fundamental' }}</h1>
            <p class="text-xl mb-4">{{ $description ?? 'Pelajari dasar-dasar pengembangan web modern dengan HTML, CSS, dan JavaScript' }}</p>
            <div class="flex items-center gap-4">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ $duration ?? '12 Minggu' }}
                </span>
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    {{ $level ?? 'Pemula' }}
                </span>
            </div>
        </div>
    </div>

    <!-- Course Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                    <h2 class="text-2xl font-bold mb-6">Deskripsi Kursus</h2>
                    <p class="text-gray-600 mb-6">
                        {{ $full_description ?? 'Kursus ini dirancang untuk pemula yang ingin memulai karir di bidang pengembangan web. 
                        Anda akan mempelajari dasar-dasar HTML, CSS, dan JavaScript, serta bagaimana menggunakan tools modern dalam 
                        pengembangan web. Di akhir kursus, Anda akan mampu membuat website responsif dan interaktif.' }}
                    </p>

                    <h3 class="text-xl font-bold mb-4">Yang Akan Anda Pelajari</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6">
                        <li class="mb-2">Fundamental HTML5 dan semantic markup</li>
                        <li class="mb-2">CSS3, Flexbox, dan Grid Layout</li>
                        <li class="mb-2">JavaScript ES6+ dan DOM Manipulation</li>
                        <li class="mb-2">Responsive Web Design</li>
                        <li class="mb-2">Version Control dengan Git</li>
                    </ul>

                    <h3 class="text-xl font-bold mb-4">Persyaratan</h3>
                    <ul class="list-disc list-inside text-gray-600">
                        <li class="mb-2">Laptop atau komputer dengan spesifikasi standar</li>
                        <li class="mb-2">Koneksi internet yang stabil</li>
                        <li class="mb-2">Tidak ada pengalaman coding sebelumnya dibutuhkan</li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-6">Silabus</h2>
                    <div class="space-y-4">
                        <!-- Week 1 -->
                        <div class="border-b pb-4">
                            <button class="flex justify-between items-center w-full">
                                <span class="font-semibold">Minggu 1: Pengenalan Web Development</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="mt-4 text-gray-600">
                                <ul class="list-disc list-inside">
                                    <li>Pengenalan HTML dan struktur dokumen</li>
                                    <li>Basic elements dan attributes</li>
                                    <li>Semantic HTML</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Add more weeks here -->
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-lg p-6 sticky top-8">
                    <div class="text-center mb-6">
                        <span class="text-3xl font-bold text-indigo-600">{{ $price ?? 'Rp 999.000' }}</span>
                    </div>
                    <button class="w-full bg-indigo-600 text-white py-3 rounded-lg mb-4 hover:bg-indigo-700">
                        Daftar Sekarang
                    </button>
                    <button class="w-full border border-indigo-600 text-indigo-600 py-3 rounded-lg hover:bg-indigo-50">
                        Tambah ke Wishlist
                    </button>

                    <div class="mt-6">
                        <h4 class="font-semibold mb-4">Kursus Ini Mencakup:</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                12 minggu akses penuh
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Video tutorial HD
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Sertifikat kelulusan
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Akses forum diskusi
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 