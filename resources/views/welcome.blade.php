<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeMaster Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-indigo-600 text-white p-4" x-data="{ isOpen: false }">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold">CodeMaster Academy</div>
                
                <!-- Mobile menu button -->
                <button @click="isOpen = !isOpen" class="md:hidden">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <!-- Desktop menu -->
                <div class="hidden md:flex space-x-6 items-center">
                    <a href="{{ url('/') }}" class="hover:text-indigo-200">Beranda</a>
                    <a href="{{ url('/courses') }}" class="block px-3 py-2 rounded-md hover:bg-indigo-500">Kursus</a>
                    <a href="{{ url('/mentors') }}" class="block px-3 py-2 rounded-md hover:bg-indigo-500">Mentor</a>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bg-white text-indigo-600 px-4 py-2 rounded-lg hover:bg-indigo-100">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-indigo-200">Masuk</a>
                        <a href="{{ route('register') }}" class="bg-white text-indigo-600 px-4 py-2 rounded-lg hover:bg-indigo-100">Daftar</a>
                    @endauth
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="md:hidden" x-show="isOpen" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform scale-90"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 transform scale-100"
                 x-transition:leave-end="opacity-0 transform scale-90">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md hover:bg-indigo-500">Beranda</a>
                    <a href="{{ url('/courses') }}" class="block px-3 py-2 rounded-md hover:bg-indigo-500">Kursus</a>
                    <a href="{{ url('/mentors') }}" class="block px-3 py-2 rounded-md hover:bg-indigo-500">Mentor</a>
                    <a href="{{ url('/blog') }}" class="block px-3 py-2 rounded-md hover:bg-indigo-500">Blog</a>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="block px-3 py-2 bg-white text-indigo-600 rounded-md hover:bg-indigo-100">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="block px-3 py-2 rounded-md hover:bg-indigo-500">Masuk</a>
                        <a href="{{ route('register') }}" class="block px-3 py-2 bg-white text-indigo-600 rounded-md hover:bg-indigo-100">Daftar</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-indigo-700 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-6">Belajar Coding Jadi Lebih Menyenangkan</h1>
            <p class="text-xl mb-8">Mulai perjalanan coding Anda dengan mentor profesional dan materi berkualitas</p>
            @auth
                <a href="{{ url('/courses') }}" class="bg-yellow-500 text-indigo-900 px-8 py-3 rounded-full text-lg font-semibold hover:bg-yellow-400 inline-block">
                    Mulai Belajar Sekarang
                </a>
            @else
                <a href="{{ route('register') }}" class="bg-yellow-500 text-indigo-900 px-8 py-3 rounded-full text-lg font-semibold hover:bg-yellow-400 inline-block">
                    Daftar Sekarang
                </a>
            @endauth
        </div>
    </div>

    <!-- Features Section -->
    <div class="container mx-auto py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <i class="fas fa-laptop-code text-4xl text-indigo-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Belajar dengan Praktek</h3>
                <p class="text-gray-600">Kuasai coding dengan latihan hands-on dan proyek nyata</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <i class="fas fa-users text-4xl text-indigo-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Komunitas Aktif</h3>
                <p class="text-gray-600">Bergabung dengan komunitas programmer yang saling mendukung</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <i class="fas fa-certificate text-4xl text-indigo-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Sertifikat Profesional</h3>
                <p class="text-gray-600">Dapatkan sertifikat yang diakui industri</p>
            </div>
        </div>
    </div>

    <!-- Popular Courses -->
    <div class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Kursus Populer</h2>
            <!-- TODO: Integrate with database -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Web Development Course Card -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://source.unsplash.com/800x600/?coding" alt="Web Development" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Web Development</h3>
                        <p class="text-gray-600 mb-4">Belajar HTML, CSS, dan JavaScript dari dasar hingga mahir</p>
                        <div class="flex justify-between items-center">
                            <span class="text-indigo-600 font-semibold">Rp 999.000</span>
                            @auth
                                <a href="{{ route('dashboard') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Mulai Belajar</a>
                            @else
                                <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Daftar</a>
                            @endauth
                        </div>
                    </div>
                </div>

                <!-- Mobile Development Course Card -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://source.unsplash.com/800x600/?mobile" alt="Mobile Development" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Mobile Development</h3>
                        <p class="text-gray-600 mb-4">Buat aplikasi mobile dengan Flutter dan React Native</p>
                        <div class="flex justify-between items-center">
                            <span class="text-indigo-600 font-semibold">Rp 1.299.000</span>
                            @auth
                                <a href="{{ route('dashboard') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Mulai Belajar</a>
                            @else
                                <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Daftar</a>
                            @endauth
                        </div>
                    </div>
                </div>

                <!-- Data Science Course Card -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://source.unsplash.com/800x600/?data" alt="Data Science" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Data Science</h3>
                        <p class="text-gray-600 mb-4">Pelajari Data Science dan Machine Learning dengan Python</p>
                        <div class="flex justify-between items-center">
                            <span class="text-indigo-600 font-semibold">Rp 1.499.000</span>
                            @auth
                                <a href="{{ route('dashboard') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Mulai Belajar</a>
                            @else
                                <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Daftar</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-indigo-700 text-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Siap Untuk Memulai?</h2>
            <p class="text-xl mb-8">Bergabung sekarang dan dapatkan kursus gratis!</p>
            @auth
                <a href="{{ url('/courses') }}" class="bg-yellow-500 text-indigo-900 px-8 py-3 rounded-full text-lg font-semibold hover:bg-yellow-400 inline-block">
                    Pilih Kursus
                </a>
            @else
                <a href="{{ route('register') }}" class="bg-yellow-500 text-indigo-900 px-8 py-3 rounded-full text-lg font-semibold hover:bg-yellow-400 inline-block">
                    Daftar Sekarang
                </a>
            @endauth
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">CodeMaster Academy</h3>
                <p class="text-gray-400">Platform pembelajaran coding terbaik untuk masa depan teknologi Indonesia.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Kursus</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ url('/courses/web-development') }}" class="hover:text-white">Web Development</a></li>
                    <li><a href="{{ url('/courses/mobile-development') }}" class="hover:text-white">Mobile Development</a></li>
                    <li><a href="{{ url('/courses/data-science') }}" class="hover:text-white">Data Science</a></li>
                    <li><a href="{{ url('/courses/ui-ux-design') }}" class="hover:text-white">UI/UX Design</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Perusahaan</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ url('/about') }}" class="hover:text-white">Tentang Kami</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-white">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
            <p>&copy; 2024 CodeMaster Academy. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
