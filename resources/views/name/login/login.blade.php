@extends('name.master')

@section('InfiniteName')
    Login
@endsection
@section('content')
    <section id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12 title">
                    <a href="index.html"><span>Home</span> </a><a href="login.html"> > Login / Register</a>
                </div>
            </div>
        </div>
    </section>
    <!-- page title Part end -->

    <!-- Name blogs start -->
    <section id="name-blog">
        <div class="container">
            <div class="row">
                <div class="login-box">
                    <div class="lb-header">
                        <a href="#" class="active" id="login-box-link">Login</a>
                        <a href="#" id="signup-box-link">Sign Up</a>
                    </div>
                    <form class="email-login">
                        <div class="u-form-group">
                            <input type="email" placeholder="Email"/>
                        </div>
                        <div class="u-form-group">
                            <input type="password" placeholder="Password"/>
                        </div>
                        <div class="u-form-group">
                            <button>Log in</button>
                        </div>
                        <div class="u-form-group">
                            <a href="#" class="forgot-password">Forgot password?</a>
                        </div>
                    </form>
                    <form class="email-signup">
                        <div class="u-form-group">
                            <input type="email" placeholder="Email"/>
                        </div>
                        <div class="u-form-group">
                            <input type="password" placeholder="Password"/>
                        </div>
                        <div class="u-form-group">
                            <input type="password" placeholder="Confirm Password"/>
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
    <!-- Name blogs end -->

    <!-- Footer part start -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 pl-0">
                            <div class="footer-logo">
                                <a href="#"><img src="{{asset('/')}}name/images/logo.png" alt="footer-logo" class="img-fluid"></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="footer-item">
                                <div class="footer-heading">
                                    <h3>Important link</h3>
                                </div>
                                <div class="links">
                                    <a href="#">boys name</a>
                                    <a href="#">girls name</a>
                                    <a href="#">Female Shahabi Name</a>
                                    <a href="#">male Shahabi Name</a>
                                    <a href="#">99 Names of Allah</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="footer-item">
                                <div class="footer-heading">
                                    <h3>Important link</h3>
                                </div>
                                <div class="links">
                                    <a href="#">boys name</a>
                                    <a href="#">girls name</a>
                                    <a href="#">Female Shahabi Name</a>
                                    <a href="#">male Shahabi Name</a>
                                    <a href="#">99 Names of Allah</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="footer-item">
                                <div class="footer-heading">
                                    <h3>Recent blogs</h3>
                                </div>
                                <div class="links extra-class">
                                    <a href="#">Naming your new born Muslim Baby</a>
                                    <a href="#">Names of Prophet Mohammad saw</a>
                                    <a href="#">Female Sahabi Names</a>
                                    <a href="#">Muslim New Born</a>
                                    <a href="#">Male Sahabi Names</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="footer-item">
                                <div class="footer-heading">
                                    <h3>my account</h3>
                                </div>
                                <div class="links extra-class">
                                    <a href="#">create account</a>
                                    <a href="#">login</a>
                                    <a href="#">contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection