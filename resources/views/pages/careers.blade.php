@extends('layouts.app')

@section('content')
<div class="bg-gray-100">
    <!-- Header -->
    <div class="bg-indigo-700 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Karir</h1>
            <p class="text-xl">Bergabung dengan tim kami dan wujudkan impianmu</p>
        </div>
    </div>

    <!-- Job Listings -->
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <!-- Job Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Senior Web Developer</h3>
                        <div class="flex space-x-4 text-sm text-gray-600">
                            <span><i class="fas fa-map-marker-alt mr-1"></i> Jakarta</span>
                            <span><i class="fas fa-clock mr-1"></i> Full Time</span>
                            <span><i class="fas fa-money-bill-wave mr-1"></i> Competitive</span>
                        </div>
                    </div>
                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Dibuka</span>
                </div>
                <p class="text-gray-600 mb-4">Kami mencari Senior Web Developer yang berpengalaman untuk bergabung dengan tim engineering kami...</p>
                <a href="#" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Lamar Sekarang</a>
            </div>
            
            <!-- Tambahkan job listing lainnya di sini -->
        </div>
    </div>
</div>
@endsection 