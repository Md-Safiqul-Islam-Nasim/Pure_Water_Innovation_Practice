@extends('frontend.app')

@section('title', 'Login')
@section('content')



<x-guest-layout>
    <main>
        <div class="sign--in--wrapper">
            <div class="sign--in--inner">
                <div class="sign--in--left">
                    <div class="sign--in--image">
                        <img src="frontend/images/signInPhoto.png" alt="not found">
                    </div>
                </div>

                <div class="nr--signIn--right">

                    <div class="nr--signIn--inputBox">
                        <div class="nr--signIn--inputBox--heading">
                            <h2 class="signIn--signUp--header">Get Started Now</h2>
                            <p class="signIn--signUp--pera">Enter your credential to access your account </p>
                        </div>

                        <div class="nr--logIn--with--wrapper">

                            <div class="log--in--with--google">
                                <div class="nr--login--And--text">
                                    <div class="log--in--with--google--svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_5982_5140)">
                                                <mask id="mask0_5982_5140" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="4" y="3" width="16" height="17">
                                                    <path d="M19.6892 10.4316H12.2006V13.5319H16.5111C16.1093 15.5015 14.4289 16.6322 12.2006 16.6322C9.57046 16.6322 7.45173 14.5167 7.45173 11.8905C7.45173 9.26439 9.57046 7.14889 12.2006 7.14889C13.333 7.14889 14.3558 7.55011 15.1595 8.20665L17.4974 5.87229C16.0727 4.63217 14.2463 3.86621 12.2006 3.86621C7.74397 3.86621 4.16406 7.44068 4.16406 11.8905C4.16406 16.3404 7.74397 19.9148 12.2006 19.9148C16.2189 19.9148 19.8718 16.9969 19.8718 11.8905C19.8718 11.4164 19.7988 10.9057 19.6892 10.4316Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_5982_5140)">
                                                    <path d="M3.4375 16.6317V7.14844L9.64755 11.8901L3.4375 16.6317Z" fill="#FBBC05" />
                                                </g>
                                                <mask id="mask1_5982_5140" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="4" y="3" width="16" height="17">
                                                    <path d="M19.6892 10.4316H12.2006V13.5319H16.5111C16.1093 15.5015 14.4289 16.6322 12.2006 16.6322C9.57046 16.6322 7.45173 14.5167 7.45173 11.8905C7.45173 9.26439 9.57046 7.14889 12.2006 7.14889C13.333 7.14889 14.3558 7.55011 15.1595 8.20665L17.4974 5.87229C16.0727 4.63217 14.2463 3.86621 12.2006 3.86621C7.74397 3.86621 4.16406 7.44068 4.16406 11.8905C4.16406 16.3404 7.74397 19.9148 12.2006 19.9148C16.2189 19.9148 19.8718 16.9969 19.8718 11.8905C19.8718 11.4164 19.7988 10.9057 19.6892 10.4316Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask1_5982_5140)">
                                                    <path d="M3.42969 7.14888L9.63973 11.8905L12.1968 9.6656L20.9639 8.2431V3.13672H3.42969V7.14888Z" fill="#EA4335" />
                                                </g>
                                                <mask id="mask2_5982_5140" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="4" y="3" width="16" height="17">
                                                    <path d="M19.6892 10.4316H12.2006V13.5319H16.5111C16.1093 15.5015 14.4289 16.6322 12.2006 16.6322C9.57046 16.6322 7.45173 14.5167 7.45173 11.8905C7.45173 9.26439 9.57046 7.14889 12.2006 7.14889C13.333 7.14889 14.3558 7.55011 15.1595 8.20665L17.4974 5.87229C16.0727 4.63217 14.2463 3.86621 12.2006 3.86621C7.74397 3.86621 4.16406 7.44068 4.16406 11.8905C4.16406 16.3404 7.74397 19.9148 12.2006 19.9148C16.2189 19.9148 19.8718 16.9969 19.8718 11.8905C19.8718 11.4164 19.7988 10.9057 19.6892 10.4316Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask2_5982_5140)">
                                                    <path d="M3.42969 16.6322L14.3886 8.2431L17.2744 8.60784L20.9639 3.13672V20.6443H3.42969V16.6322Z" fill="#34A853" />
                                                </g>
                                                <mask id="mask3_5982_5140" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="4" y="3" width="16" height="17">
                                                    <path d="M19.6892 10.4316H12.2006V13.5319H16.5111C16.1093 15.5015 14.4289 16.6322 12.2006 16.6322C9.57046 16.6322 7.45173 14.5167 7.45173 11.8905C7.45173 9.26439 9.57046 7.14889 12.2006 7.14889C13.333 7.14889 14.3558 7.55011 15.1595 8.20665L17.4974 5.87229C16.0727 4.63217 14.2463 3.86621 12.2006 3.86621C7.74397 3.86621 4.16406 7.44068 4.16406 11.8905C4.16406 16.3404 7.74397 19.9148 12.2006 19.9148C16.2189 19.9148 19.8718 16.9969 19.8718 11.8905C19.8718 11.4164 19.7988 10.9057 19.6892 10.4316Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask3_5982_5140)">
                                                    <path d="M20.9729 20.6439L9.64869 11.8901L8.1875 10.7959L20.9729 7.14844V20.6439Z" fill="#4285F4" />
                                                </g>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_5982_5140">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="log--in--with--google--text">
                                        <h5 class="nr--LogIn--with--commonText">Log in With google </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="log--in--with--google">
                                <div class="nr--login--And--text">
                                    <div class="log--in--with--google--svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M20.437 9.16282C20.3388 9.22131 18.0005 10.4558 18.0005 13.1928C18.1107 16.3142 20.9513 17.4089 21 17.4089C20.9513 17.4674 20.5712 18.9001 19.4452 20.402C18.5515 21.6957 17.5597 23 16.0536 23C14.6209 23 14.1066 22.1378 12.4536 22.1378C10.6783 22.1378 10.176 23 8.81683 23C7.3107 23 6.24539 21.6258 5.30307 20.3442C4.07884 18.6669 3.03829 16.0347 3.00155 13.5073C2.97679 12.168 3.24672 10.8515 3.9319 9.73332C4.89898 8.17223 6.62552 7.1125 8.51097 7.07756C9.95561 7.03122 11.2413 8.02105 12.123 8.02105C12.9679 8.02105 14.5475 7.07756 16.3347 7.07756C17.1061 7.07832 19.1633 7.29938 20.437 9.16282ZM12.0008 6.81016C11.7436 5.58711 12.4536 4.36406 13.1148 3.58389C13.9597 2.64039 15.2941 2 16.4449 2C16.5184 3.22305 16.0528 4.42255 15.2207 5.29616C14.474 6.23965 13.1883 6.94993 12.0008 6.81016Z" fill="#161C24" />
                                        </svg>
                                    </div>
                                    <div class="log--in--with--google--text">
                                        <h5 class="nr--LogIn--with--commonText">Log in With Apple </h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="nr--or"><span class="nr--LogIn--with--commonText">Or</span></div>

                        <form method="POST" action="{{ route('register') }}">

                            @csrf
                            <!-- User Name -->
                            <div class="nr--email--and--password--wrapper">
                                <label for="name"><span class="input--lebel--text">Username</span></label>
                                <div class="nr--email--input">
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        autofocus
                                        placeholder="Your Name">
                                    @error('name')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Email Address -->
                            <div class="nr--email--input--main">
                                <label for="email"><span class="input--lebel--text">Email Address</span></label>
                                <div class="nr--email--input">
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        placeholder="example@example.com">
                                    @error('email')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="nr--email--input--main">
                                <label for="password"><span class="input--lebel--text">Password</span></label>

                                <div class="nr--email--input">
                                    <input
                                        type="password"
                                        id="password"
                                        name="password"
                                        required
                                        placeholder="Your Password">
                                    @error('password')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
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
                                <label for="password_confirmation"><span class="input--lebel--text">Confirm Password</span></label>
                                <div class="nr--email--input">
                                    <input
                                        type="password"
                                        id="password_confirmation"
                                        name="password_confirmation"
                                        required
                                        placeholder="Confirm Password">
                                    @error('password_confirmation')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="forget--pass--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M15.5799 12C15.5799 13.98 13.9799 15.58 11.9999 15.58C10.0199 15.58 8.41992 13.98 8.41992 12C8.41992 10.02 10.0199 8.42001 11.9999 8.42001C13.9799 8.42001 15.5799 10.02 15.5799 12Z" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11.9998 20.27C15.5298 20.27 18.8198 18.19 21.1098 14.59C22.0098 13.18 22.0098 10.81 21.1098 9.4C18.8198 5.8 15.5298 3.72 11.9998 3.72C8.46984 3.72 5.17984 5.8 2.88984 9.4C1.98984 10.81 1.98984 13.18 2.88984 14.59C5.17984 18.19 8.46984 20.27 11.9998 20.27Z" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>

                            <div class="nr--sign--in--checkbox">
                                <input class="checkbox" type="checkbox" id="privecy" name="privecy" value="privecy">
                                <label for="privecy"> <span class="nr--LogIn--with--commonText">I have agree to the terms & policy</span> </label>
                            </div>
                            <div class="signIn--btn">
                                <button type="submit" class="loginSubmit--btn">Sign Up</button>
                            </div>
                            </orm>

                            <div class="nr--dont--account">
                                <a class="nr--dont--account--text " href="{{ route('login') }}">Have an account!! <span>Sign In</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
@endsection