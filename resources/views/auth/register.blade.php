@extends('name.master')

@section('content')

    <section id="name-blog">
        <div class="container">
            <div class="row">
                <div class="login-box">
                    <div class="lb-header">
                        <a href="#" class="active" id="login-box-link">Login</a>
                        <a href="#" id="signup-box-link">Sign Up</a>
                    </div>
                    <form class="email-login" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="u-form-group">
                            <input name="email" type="email" placeholder="Email"/>
                        </div>
                        <div class="u-form-group">
                            <input name="password" type="password" placeholder="Password"/>
                        </div>
                        <div class="u-form-group">
                            <button>Log in</button>
                        </div>
                        <div class="u-form-group">
                            <a href="#" class="forgot-password">Forgot password?</a>
                        </div>
                    </form>

                    <form class="email-signup" action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="u-form-group">
                            <input name="name" type="text" placeholder="Name"/>
                        </div>
                        <div class="u-form-group">
                            <input name="email" type="email" placeholder="Email"/>
                        </div>
                        <div class="u-form-group">
                            <input name="password" type="password" placeholder="Password"/>
                        </div>
                        <div class="u-form-group">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password"/>
                        </div>
                        <div class="u-form-group">
                            <button>Sign Up</button>
                        </div>
                    </form>
                    <div class="social-login">
                        <a href="#">
                            <i class="fa fa-facebook fa-lg"></i>
                            Login in with facebook
                        </a>
                        <a href="#">
                            <i class="fa fa-google-plus fa-lg"></i>
                            log in with Google
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
