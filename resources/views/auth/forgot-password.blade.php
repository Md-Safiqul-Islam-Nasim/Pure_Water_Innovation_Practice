<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-b from-blue-400 to-cyan-400 flex items-center justify-center">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-semibold text-blue-800">Forgot Password?</h1>
                <p class="text-gray-600">No problem. Just let us know your email address and we will send a password reset link.</p>
            </div>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-center mt-6">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Back Link -->
            <div class="text-center mt-4">
                <a href="{{ route('login') }}" class="text-sm text-blue-500 hover:underline">Back to Login</a>
            </div>
        </div>
    </div>
</x-guest-layout>
