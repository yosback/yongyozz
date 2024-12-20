@extends('layouts.app')

@section('content')
<div class="bg-gray-100">
    <!-- Header -->
    <div class="bg-indigo-700 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Mentor Profesional Kami</h1>
            <p class="text-xl">Belajar dari praktisi terbaik di industri teknologi</p>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap gap-4 mb-8">
            <button onclick="filterMentors('all')" class="filter-btn active px-4 py-2 bg-indigo-600 text-white rounded-full hover:bg-indigo-700" data-category="all">Semua Mentor</button>
            <button onclick="filterMentors('web')" class="filter-btn px-4 py-2 bg-white text-gray-700 rounded-full hover:bg-indigo-700 hover:text-white" data-category="web">Web Development</button>
            <button onclick="filterMentors('mobile')" class="filter-btn px-4 py-2 bg-white text-gray-700 rounded-full hover:bg-indigo-700 hover:text-white" data-category="mobile">Mobile Development</button>
            <button onclick="filterMentors('data')" class="filter-btn px-4 py-2 bg-white text-gray-700 rounded-full hover:bg-indigo-700 hover:text-white" data-category="data">Data Science</button>
            <button onclick="filterMentors('design')" class="filter-btn px-4 py-2 bg-white text-gray-700 rounded-full hover:bg-indigo-700 hover:text-white" data-category="design">UI/UX Design</button>
        </div>
    </div>

    <!-- Mentors Grid -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Web Development Mentors -->
            <div class="mentor-card bg-white rounded-lg overflow-hidden shadow-lg" data-category="web">
                <img src="https://source.unsplash.com/400x400/?professional-man-1" alt="Ahmad Fadillah" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Ahmad Fadillah</h3>
                    <p class="text-indigo-600 mb-2">Senior Web Developer</p>
                    <p class="text-gray-600 mb-4">10+ tahun pengalaman di pengembangan web dan aplikasi enterprise. Expert di Laravel & Vue.js</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="mentor-card bg-white rounded-lg overflow-hidden shadow-lg" data-category="web">
                <img src="https://source.unsplash.com/400x400/?professional-woman-1" alt="Sarah Wilson" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Sarah Wilson</h3>
                    <p class="text-indigo-600 mb-2">Full Stack Developer</p>
                    <p class="text-gray-600 mb-4">Specialist di MERN Stack dan AWS. Berpengalaman membangun aplikasi skala besar</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <!-- Mobile Development Mentors -->
            <div class="mentor-card bg-white rounded-lg overflow-hidden shadow-lg" data-category="mobile">
                <img src="https://source.unsplash.com/400x400/?professional-man-2" alt="Budi Santoso" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Budi Santoso</h3>
                    <p class="text-indigo-600 mb-2">Mobile Development Lead</p>
                    <p class="text-gray-600 mb-4">Expert Flutter developer dengan pengalaman di berbagai startup unicorn</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="mentor-card bg-white rounded-lg overflow-hidden shadow-lg" data-category="mobile">
                <img src="https://source.unsplash.com/400x400/?professional-woman-2" alt="Jessica Lee" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Jessica Lee</h3>
                    <p class="text-indigo-600 mb-2">iOS Developer</p>
                    <p class="text-gray-600 mb-4">Apple Certified Developer dengan spesialisasi di SwiftUI dan iOS Development</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <!-- Data Science Mentors -->
            <div class="mentor-card bg-white rounded-lg overflow-hidden shadow-lg" data-category="data">
                <img src="https://source.unsplash.com/400x400/?professional-man-3" alt="Dr. Rudi Wijaya" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Dr. Rudi Wijaya</h3>
                    <p class="text-indigo-600 mb-2">Data Science Lead</p>
                    <p class="text-gray-600 mb-4">PhD in Machine Learning dengan pengalaman riset di deep learning dan NLP</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="mentor-card bg-white rounded-lg overflow-hidden shadow-lg" data-category="data">
                <img src="https://source.unsplash.com/400x400/?professional-woman-3" alt="Maya Putri" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Maya Putri</h3>
                    <p class="text-indigo-600 mb-2">AI Research Scientist</p>
                    <p class="text-gray-600 mb-4">Spesialis di computer vision dan big data analytics dengan pengalaman di berbagai proyek AI</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <!-- UI/UX Design Mentors -->
            <div class="mentor-card bg-white rounded-lg overflow-hidden shadow-lg" data-category="design">
                <img src="https://source.unsplash.com/400x400/?professional-woman-4" alt="Linda Kusuma" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Linda Kusuma</h3>
                    <p class="text-indigo-600 mb-2">Senior UX Designer</p>
                    <p class="text-gray-600 mb-4">10+ tahun pengalaman di user research dan design thinking. Ex-Google Designer</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="mentor-card bg-white rounded-lg overflow-hidden shadow-lg" data-category="design">
                <img src="https://source.unsplash.com/400x400/?professional-man-4" alt="David Chen" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">David Chen</h3>
                    <p class="text-indigo-600 mb-2">UI/UX Lead</p>
                    <p class="text-gray-600 mb-4">Spesialis UI Animation dan Design Systems. Berpengalaman di berbagai produk digital</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function filterMentors(category) {
    // Remove active class from all buttons
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('active', 'bg-indigo-600', 'text-white');
        btn.classList.add('bg-white', 'text-gray-700');
    });

    // Add active class to clicked button
    const activeBtn = document.querySelector(`[data-category="${category}"]`);
    activeBtn.classList.remove('bg-white', 'text-gray-700');
    activeBtn.classList.add('active', 'bg-indigo-600', 'text-white');

    // Show/hide mentor cards based on category
    document.querySelectorAll('.mentor-card').forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Initialize with all mentors shown
document.addEventListener('DOMContentLoaded', () => {
    filterMentors('all');
});
</script>
@endpush
@endsection 