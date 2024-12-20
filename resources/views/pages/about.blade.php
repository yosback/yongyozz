@extends('layouts.app')

@section('content')
<div class="bg-gray-100">
    <!-- Header -->
    <div class="bg-indigo-700 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Tentang Kami</h1>
            <p class="text-xl">Membangun masa depan teknologi Indonesia</p>
        </div>
    </div>

    <!-- About Content -->
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-bold mb-4">Visi Kami</h2>
                <p class="text-gray-600 mb-6">
                    Menjadi platform pembelajaran coding terdepan yang memberdayakan talent digital Indonesia untuk bersaing di tingkat global.
                </p>

                <h2 class="text-2xl font-bold mb-4">Misi Kami</h2>
                <ul class="list-disc list-inside text-gray-600 mb-6">
                    <li>Menyediakan pendidikan teknologi berkualitas tinggi</li>
                    <li>Membangun komunitas developer yang solid</li>
                    <li>Menghubungkan talent dengan industri teknologi</li>
                </ul>
            </div>

            <!-- Team Section -->
            <div class="mt-16">
                <h2 class="text-3xl font-bold text-center mb-12">Tim Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Team Member 1 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-xl">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('img/team/team1.jpg') }}" alt="CEO" class="w-full h-48 object-cover transition duration-500 hover:scale-110">
                            <div class="absolute inset-0 bg-indigo-900 opacity-0 hover:opacity-20 transition duration-500"></div>
                        </div>
                        <div class="p-6 transform transition duration-500">
                            <h3 class="text-xl font-semibold mb-2 hover:text-indigo-600">Yosafat Wahyono</h3>
                            <p class="text-indigo-600 mb-3">CEO & Founder</p>
                            <p class="text-gray-600 text-sm mb-4">10+ tahun pengalaman di industri teknologi</p>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-xl">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('img/team/team2.jpg') }}" alt="CTO" class="w-full h-48 object-cover transition duration-500 hover:scale-110">
                            <div class="absolute inset-0 bg-indigo-900 opacity-0 hover:opacity-20 transition duration-500"></div>
                        </div>
                        <div class="p-6 transform transition duration-500">
                            <h3 class="text-xl font-semibold mb-2 hover:text-indigo-600">Maftukh Zaki Mubarok</h3>
                            <p class="text-indigo-600 mb-3">Chief Technology Officer</p>
                            <p class="text-gray-600 text-sm mb-4">Ahli dalam arsitektur software & AI</p>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-xl">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('img/team/team3.jpg') }}" alt="COO" class="w-full h-48 object-cover transition duration-500 hover:scale-110">
                            <div class="absolute inset-0 bg-indigo-900 opacity-0 hover:opacity-20 transition duration-500"></div>
                        </div>
                        <div class="p-6 transform transition duration-500">
                            <h3 class="text-xl font-semibold mb-2 hover:text-indigo-600">Fiqri Andrian Julianto</h3>
                            <p class="text-indigo-600 mb-3">Chief Operating Officer</p>
                            <p class="text-gray-600 text-sm mb-4">Spesialis dalam pengembangan bisnis</p>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-xl">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('img/team/team4.jpg') }}" alt="Head of Education" class="w-full h-48 object-cover transition duration-500 hover:scale-110">
                            <div class="absolute inset-0 bg-indigo-900 opacity-0 hover:opacity-20 transition duration-500"></div>
                        </div>
                        <div class="p-6 transform transition duration-500">
                            <h3 class="text-xl font-semibold mb-2 hover:text-indigo-600">Fatihul Faqih Hudzayfah</h3>
                            <p class="text-indigo-600 mb-3">Head of Education</p>
                            <p class="text-gray-600 text-sm mb-4">Pakar dalam pengembangan kurikulum</p>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-gray-400 hover:text-indigo-600 transform transition duration-300 hover:scale-125"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 