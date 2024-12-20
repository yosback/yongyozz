<title>CodeMaster Academy</title>
<x-classroom-layout>
    <!-- Search Section -->
    <div class="mb-8">
        <div class="max-w-3xl mx-auto">
            <form action="{{ route('courses.search') }}" method="GET" class="flex gap-4">
                <div class="flex-1">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Cari ..." 
                        value="{{ request('search') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                </div>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    <i class="fas fa-search mr-2"></i>
                    Cari
                </button>
            </form>
            
            <!-- Filter Tags -->
            <div class="flex gap-2 mt-3">
                <span class="text-sm text-gray-500">Filter:</span>
                <button class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200">Web Development</button>
                <button class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200">Mobile</button>
                <button class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200">Data Science</button>
            </div>
        </div>
    </div>

    <!-- Course Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Web Development -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all">
            <div class="h-48 bg-gradient-to-r from-blue-500 to-blue-600 relative">
                <img src="https://source.unsplash.com/800x600/?coding" alt="Web Development" class="w-full h-full object-cover opacity-50">
                <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60">
                    <h3 class="text-xl font-bold text-white">Web Development</h3>
                    <p class="text-blue-100">Full Stack Development • Rp 999.000</p>
                </div>
            </div>
            <div class="p-6">
                <p class="text-gray-600 mb-4">Belajar menjadi Full Stack Developer dengan HTML, CSS, JavaScript, dan PHP Laravel</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">36 Materi</span>
                    <a href="{{ route('course.web') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                        Mulai Belajar
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Development -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all">
            <div class="h-48 bg-gradient-to-r from-green-500 to-green-600 relative">
                <img src="https://source.unsplash.com/800x600/?mobile" alt="Mobile Development" class="w-full h-full object-cover opacity-50">
                <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60">
                    <h3 class="text-xl font-bold text-white">Mobile Development</h3>
                    <p class="text-green-100">Flutter & React Native • Rp 899.000</p>
                </div>
            </div>
            <div class="p-6">
                <p class="text-gray-600 mb-4">Kuasai pengembangan aplikasi mobile dengan Flutter dan React Native</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">42 Materi</span>
                    <a href="{{ route('course.mobile') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                        Mulai Belajar
                    </a>
                </div>
            </div>
        </div>

        <!-- Data Science -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all">
            <div class="h-48 bg-gradient-to-r from-purple-500 to-purple-600 relative">
                <img src="https://source.unsplash.com/800x600/?data" alt="Data Science" class="w-full h-full object-cover opacity-50">
                <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60">
                    <h3 class="text-xl font-bold text-white">Data Science</h3>
                    <p class="text-purple-100">Python & Machine Learning • Rp 1.299.000</p>
                </div>
            </div>
            <div class="p-6">
                <p class="text-gray-600 mb-4">Pelajari Data Science dan Machine Learning dengan Python</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">48 Materi</span>
                    <a href="{{ route('course.data') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700">
                        Mulai Belajar
                    </a>
                </div>
            </div>
        </div>

        <!-- UI/UX Design -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all">
            <div class="h-48 bg-gradient-to-r from-pink-500 to-pink-600 relative">
                <img src="https://source.unsplash.com/800x600/?design" alt="UI/UX Design" class="w-full h-full object-cover opacity-50">
                <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60">
                    <h3 class="text-xl font-bold text-white">UI/UX Design</h3>
                    <p class="text-pink-100">Figma & Adobe XD • Rp 799.000</p>
                </div>
            </div>
            <div class="p-6">
                <p class="text-gray-600 mb-4">Belajar merancang antarmuka pengguna yang menarik dan user-friendly</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">32 Materi</span>
                    <a href="{{ route('course.uiux') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700">
                        Mulai Belajar
                    </a>
                </div>
            </div>
        </div>

        <!-- Machine Learning -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all">
            <div class="h-48 bg-gradient-to-r from-yellow-500 to-yellow-600 relative">
                <img src="https://source.unsplash.com/800x600/?ai" alt="Machine Learning" class="w-full h-full object-cover opacity-50">
                <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60">
                    <h3 class="text-xl font-bold text-white">Machine Learning</h3>
                    <p class="text-yellow-100">TensorFlow & PyTorch • Rp 1.499.000</p>
                </div>
            </div>
            <div class="p-6">
                <p class="text-gray-600 mb-4">Pelajari dasar-dasar Machine Learning dan implementasinya</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">45 Materi</span>
                    <a href="{{ route('course.ml') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700">
                        Mulai Belajar
                    </a>
                </div>
            </div>
        </div>

        <!-- Deep Learning -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all">
            <div class="h-48 bg-gradient-to-r from-red-500 to-red-600 relative">
                <img src="https://source.unsplash.com/800x600/?neural" alt="Deep Learning" class="w-full h-full object-cover opacity-50">
                <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60">
                    <h3 class="text-xl font-bold text-white">Deep Learning</h3>
                    <p class="text-red-100">Neural Networks • Rp 1.699.000</p>
                </div>
            </div>
            <div class="p-6">
                <p class="text-gray-600 mb-4">Pelajari Deep Learning dan Neural Networks secara mendalam</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">40 Materi</span>
                    <a href="{{ route('course.deep') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700">
                        Mulai Belajar
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-classroom-layout>
