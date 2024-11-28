@extends('frontend.app')

@section('title', 'Forgot Password')
@section('content')
<main>
    <section class="sign--in--wrapper">
        <div class="sign--in--inner">
            <div class="sign--in--left">
                <div class="sign--in--image">
                    <img src="frontend/images/signInPhoto.png" alt="not found">
                </div>
            </div>

            <div class="nr--signIn--right">

                <div class="nr--signIn--inputBox">
                    <div class="nr--signIn--inputBox--heading">
                        <h2 class="signIn--signUp--header">Forget Password?</h2>
                        <p class="signIn--signUp--pera">Enter your credentials to reset your password</p>
                    </div>

                    <div class="nr--or"><span class="nr--LogIn--with--commonText">Or</span></div>

                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="nr--email--and--password--wrapper">
                            <div class="nr--email--input--main">
                                <label for="Forgetemail"><span class="input--lebel--text">Email</span></label>
                                <div class="nr--email--input">
                                    <input type="email" id="Forgetemail" name="email" placeholder="Enter Your Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="nr--reset--password--btn">
                            <button type="submit" class="btn btn-danger">Reset Password</button>
                        </div>
                    </form>


                    <div class="nr--dont--account">
                        <a class="nr--dont--account--text" href="{{route('login')}}">Don’t have an account! <span>Sign Up</span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection