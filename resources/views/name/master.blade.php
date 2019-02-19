<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('InfiniteName')</title>
    <link rel="stylesheet"href="{{asset('/')}}name/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}name/css/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}name/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}name/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}name/css/media.css">
</head>
<body>

<!-- Navbar Part Start -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container p-0">
        <a class="navbar-brand" href="{{route('/')}}"><img src="{{asset('/')}}name/images/logo.png" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria- controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('boys')}}">Boys Name <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('girls')}}">Girls Name</a>
                </li>
            </ul>
            <div class="login">
                @if(!Auth::user())
                    <a href="{{route('login')}}">Login/Register</a>
                    @else
                    <a href="">Logout</a>
                @endif

            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Search Name" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>
<!-- Navbar Part End -->
@yield('content')
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
<!-- Footer part end -->

<!-- Footer bottom part start -->
<section id="footer-btm">
    <div class="container">
        <div class="row">
            <div class="col-12 footer-bottom-text text-center">
                <p>Copyright &copy 2017. All rights reserved by <a href="#">CREATIVE</a>.</p>
            </div>
        </div>
    </div>
</section>
<!-- Footer bottom part end -->

<script src="{{asset('/')}}name/js/jquery-1.12.4.min.js"></script>
<script src="{{asset('/')}}name/js/slick.min.js"></script>
<script src="{{asset('/')}}name/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}name/js/custom.js"></script>
</body>
</html>
