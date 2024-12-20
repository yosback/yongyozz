<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
    x-data="{ darkMode: localStorage.getItem('darkMode') === 'true', sidebarOpen: false }" 
    x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
    :class="{ 'dark': darkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CodeMaster Academy') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900" x-data="{ sidebarOpen: false }">
    <!-- Top Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-sm fixed w-full top-0 z-50 h-16">
        <div class="max-w-full mx-auto px-4 h-full">
            <div class="flex justify-between h-full items-center">
                <!-- Left Side -->
                <div class="flex items-center">
                    <!-- Hamburger Menu untuk toggle sidebar (Mobile & Desktop) -->
                    <button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 mr-2">
                        <svg class="w-6 h-6 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    
                    <!-- Logo -->
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-8 w-auto">
                        <span class="ml-2 text-xl font-semibold text-gray-900 dark:text-white">CodeMaster Academy</span>
                    </a>
                </div>

                <!-- Right Side -->
                <div class="flex items-center">
                    <!-- Dark Mode Toggle -->
                    <button @click="darkMode = !darkMode" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 mr-2">
                        <svg x-show="!darkMode" class="w-6 h-6 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <svg x-show="darkMode" class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>

                    <!-- Profile Dropdown -->
                    <div class="relative ml-3">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <img class="h-8 w-8 rounded-full object-cover" 
                                        src="{{ Auth::user()->avatar ? Storage::url(Auth::user()->avatar) : 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name) }}" 
                                        alt="{{ Auth::user()->name }}">
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <div class="px-4 py-3">
                                    <p class="text-sm dark:text-gray-300">Signed in as</p>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white truncate">{{ Auth::user()->email }}</p>
                                </div>

                                <x-dropdown-link href="{{ route('profile.edit') }}" class="dark:text-gray-300 dark:hover:bg-gray-700">
                                    {{ __('Edit Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();"
                                            class="dark:text-gray-300 dark:hover:bg-gray-700">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="fixed left-0 top-16 h-[calc(100vh-4rem)] bg-white dark:bg-gray-800 shadow-sm transition-transform duration-300 transform"
        :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
        <div class="py-4">
            <nav class="space-y-1">
                <a href="{{ route('dashboard') }}" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-50 hover:text-blue-600 group {{ request()->routeIs('dashboard') ? 'text-blue-600 bg-blue-50' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Beranda</span>
                </a>

                <a href="{{ route('tasks.index') }}" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-50 hover:text-blue-600 {{ request()->routeIs('tasks.index') ? 'text-blue-600 bg-blue-50' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    <span>Tugas</span>
                </a>

                <!-- Enrolled Classes -->
                <div class="px-6 py-4">
                    <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Kelas Saya</h3>
                    <div class="mt-3 space-y-2">
                        <a href="{{ route('classroom.show', 1) }}" class="flex items-center px-3 py-2 text-sm text-gray-600 rounded-lg hover:bg-gray-50 hover:text-blue-600">
                            <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                            Web Development
                        </a>
                    </div>
                </div>

                <!-- Available Classes -->
                <div class="px-6 py-4">
                    <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Kelas Tersedia</h3>
                    <div class="mt-3 space-y-2">
                        <form action="{{ route('classroom.join', 2) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="flex items-center px-3 py-2 text-sm text-gray-600 rounded-lg hover:bg-gray-50 hover:text-blue-600 w-full text-left">
                                <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>
                                Mobile Development
                            </button>
                        </form>
                        <form action="{{ route('classroom.join', 3) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="flex items-center px-3 py-2 text-sm text-gray-600 rounded-lg hover:bg-gray-50 hover:text-blue-600 w-full text-left">
                                <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>
                                Data Science
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Teaching Classes -->
                <div class="px-6 py-4">
                    <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Fitur & Tools</h3>
                    <div class="mt-3">
                        <a href="#" class="flex items-center px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 rounded-lg w-full">
                            Forum Diskusi
                        </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 rounded-lg w-full">
                            Gemini AI
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </aside>

    <!-- Overlay untuk mobile -->
    <div x-show="sidebarOpen" 
        @click="sidebarOpen = false"
        class="fixed inset-0 bg-gray-600 bg-opacity-50 transition-opacity lg:hidden">
    </div>

    <!-- Main Content -->
    <main class="transition-all duration-300 pt-20"
        :class="{'lg:pl-64': sidebarOpen, 'lg:pl-0': !sidebarOpen}">
        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>
</html> 