<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-b from-blue-400 to-cyan-400">
        <div class="flex items-center justify-center h-screen bg-gradient-to-b from-blue-400 to-cyan-400">
            <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-semibold text-blue-800">Login</h1>
                    <p class="text-gray-600">Welcome back! Please log in to your account.</p>
                </div>

                <!-- Error Message -->
                @if(session('error'))
                    <div class="bg-red-500 text-white p-2 rounded mb-4 text-center">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Username -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Username</label>
                        <input id="email" name="email" type="email" required autofocus
                            class="mt-1 block w-full px-4 py-3 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        
                        @error('email')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required
                            class="mt-1 block w-full px-4 py-3 border @error('password') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        
                        @error('password')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Forgot Password -->
                    <div class="flex justify-end mb-6">
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-6">
                        <button type="submit"
                            class="w-full py-3 bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white font-semibold rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Login
                        </button>
                    </div>

                    <!-- Social Media Sign In -->
                    <div class="flex justify-center mb-6">
                        <a href="#" class="bg-blue-600 text-white rounded-full px-4 py-2 mx-2">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                        <a href="#" class="bg-red-600 text-white rounded-full px-4 py-2 mx-2">
                            <i class="fab fa-google"></i> Google
                        </a>
                    </div>

                    <!-- Sign Up Link -->
                    <div class="text-center">
                        <p class="text-sm text-gray-600">Don't have an account? <a href="{{ route('register') }}"
                                class="text-blue-500 hover:underline">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
