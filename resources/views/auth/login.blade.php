<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 p-4">
        <div class="flex w-full max-w-5xl">
            <!-- Login Form Section -->
            <div class="w-full md:w-1/2 bg-white p-8 rounded-lg shadow-sm">
                <div class="max-w-md mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Login</h2>
                    <p class="text-sm text-gray-600 mb-6">
                        Doesn't have an account yet? 
                        <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-500 font-medium">
                            Sign Up
                        </a>
                    </p>

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf
                        
                        <!-- Email Address -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" name="email" id="email" 
                                class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="you@example.com"
                                :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-1" />
                        </div>

                        <!-- Password -->
                        <div class="relative">
                            <div class="flex justify-between mb-1">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-500">
                                        Forgot Password?
                                    </a>
                                @endif
                            </div>
                            <input type="password" name="password" id="password"
                                class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Enter 6 character or more"
                                required />
                            <x-input-error :messages="$errors->get('password')" class="mt-1" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember_me"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                                Remember me
                            </label>
                        </div>

                        <!-- Login Button -->
                        <button type="submit" 
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                            LOGIN
                        </button>

                        <!-- Social Login Divider -->
                        <div class="relative my-6">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">or login with</span>
                            </div>
                        </div>

                        <!-- Social Login Buttons -->
                        <div class="flex justify-center">
                            <a href="{{ route('auth.google') }}" 
                               class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="h-5 w-5 mr-2" alt="Google">
                                <span class="text-sm font-medium">Login with Google</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Image Section -->
            <div class="hidden md:block md:w-1/2 pl-8">
                <img src="{{ asset('img/login.png') }}" 
                    alt="Login illustration" 
                    class="w-full h-auto"
                    style="max-width: 500px;">
            </div>
        </div>
    </div>
</x-guest-layout>
