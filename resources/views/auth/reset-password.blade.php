@extends('frontend.app')

@section('title', 'Reset Password')
@section('content')
<x-guest-layout>
    <main>
        <section class="sign--in--wrapper">
            <div class="sign--in--inner">
                <div class="sign--in--left">
                    <div class="sign--in--image">
                        <img src="{{ asset('frontend/images/signInPhoto.png') }}" alt="not found">
                    </div>
                </div>
                <div class="nr--signIn--right">
                    <div class="nr--signIn--inputBox">
                        <div class="nr--signIn--inputBox--heading">
                            <h2 class="signIn--signUp--header">Reset Your Password</h2>
                            <p class="signIn--signUp--pera">Enter your new credentials to reset your password</p>
                        </div>

                        <div class="nr--or">
                            <span class="nr--LogIn--with--commonText">Or</span>
                        </div>

                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                            <div class="nr--email--and--password--wrapper">
                                <div class="nr--email--input--main">
                                    <label for="email"><span class="input--lebel--text">Email</span></label>
                                    <div class="nr--email--input">
                                        <input type="email" id="email" name="email" value="{{ old('email', $request->email) }}" placeholder="Enter Your Email" required autofocus autocomplete="username">
                                    </div>
                                </div>
                            </div>
                                <!-- Password -->
                                <div class="nr--email--input--main">
                                    <label for="password"><span class="input--lebel--text">New Password</span></label>
                                    <div class="nr--email--input">
                                        <input class="passWordHideSHow" type="password" id="password" name="password" placeholder="Enter New Password" required autocomplete="new-password">
                                        <div class="forget--pass--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M15.5799 12C15.5799 13.98 13.9799 15.58 11.9999 15.58C10.0199 15.58 8.41992 13.98 8.41992 12C8.41992 10.02 10.0199 8.42001 11.9999 8.42001C13.9799 8.42001 15.5799 10.02 15.5799 12Z" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.9998 20.27C15.5298 20.27 18.8198 18.19 21.1098 14.59C22.0098 13.18 22.0098 10.81 21.1098 9.4C18.8198 5.8 15.5298 3.72 11.9998 3.72C8.46984 3.72 5.17984 5.8 2.88984 9.4C1.98984 10.81 1.98984 13.18 2.88984 14.59C5.17984 18.19 8.46984 20.27 11.9998 20.27Z" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="nr--email--input--main">
                                    <label for="password_confirmation"><span class="input--lebel--text">Confirm New Password</span></label>
                                    <div class="nr--email--input">
                                        <input class="passWordHideSHow" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Your Password" required autocomplete="new-password">
                                        <div class="forget--pass--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M15.5799 12C15.5799 13.98 13.9799 15.58 11.9999 15.58C10.0199 15.58 8.41992 13.98 8.41992 12C8.41992 10.02 10.0199 8.42001 11.9999 8.42001C13.9799 8.42001 15.5799 10.02 15.5799 12Z" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.9998 20.27C15.5298 20.27 18.8198 18.19 21.1098 14.59C22.0098 13.18 22.0098 10.81 21.1098 9.4C18.8198 5.8 15.5298 3.72 11.9998 3.72C8.46984 3.72 5.17984 5.8 2.88984 9.4C1.98984 10.81 1.98984 13.18 2.88984 14.59C5.17984 18.19 8.46984 20.27 11.9998 20.27Z" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="nr--reset--password--btn">
                                    <x-primary-button>
                                        {{ __('Reset Password') }}
                                    </x-primary-button>
                                </div>
                        </form>

                        <div class="nr--dont--account">
                            <a class="nr--dont--account--text" href="{{ route('login') }}">Remembered your password? <span>Login</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
@endsection