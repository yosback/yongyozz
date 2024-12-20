@extends('layouts.app')

@section('content')
<div class="bg-gray-100">
    <!-- Header -->
    <div class="bg-indigo-700 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Hubungi Kami</h1>
            <p class="text-xl">Kami siap membantu Anda</p>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Information -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-6">Informasi Kontak</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-indigo-600 mt-1 mr-4"></i>
                            <div>
                                <h3 class="font-semibold">Alamat</h3>
                                <p class="text-gray-600">Jl. Teknologi No. 123<br>Jakarta Selatan, 12345</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-phone text-indigo-600 mt-1 mr-4"></i>
                            <div>
                                <h3 class="font-semibold">Telepon</h3>
                                <p class="text-gray-600">+62 21 1234 5678</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-envelope text-indigo-600 mt-1 mr-4"></i>
                            <div>
                                <h3 class="font-semibold">Email</h3>
                                <p class="text-gray-600">info@codemasteracademy.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
                    <form>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Nama Lengkap
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                Email
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                                Pesan
                            </label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" rows="4" required></textarea>
                        </div>
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700" type="submit">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 