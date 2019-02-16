@extends('name.master')

@section('InfiniteName')
Infinite Name
@endsection

@section('content')
    <!-- Banner Part Start -->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-7 text-center ml-auto">
                    <div class="banner-text">
                        <h3>Search the name with meaning</h3>
                        <div class="search-name">
                            <div class="input-group">
                                <input class="form-control aa" placeholder="Search your name" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Search</button>
                                </div>
                            </div>
                            <div class="which-name">
                                <a href="#">boys name</a>
                                <a href="#">girls name</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Part End -->

    <!-- Alphabitacally Search start -->
    <section id="alpha-search">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="heading">
                        <h2>Alphabitacally Search</h2>
                    </div>
                </div>
                <div class="col-12 boy">
                    <div class="col-6 names-by-letter mx-auto">
                        <span>Boys name: </span>
                        <a href="#">a</a>
                        <a href="#">b</a>
                        <a href="#">c</a>
                        <a href="#">d</a>
                        <a href="#">e</a>
                        <a href="#">f</a>
                        <a href="#">g</a>
                        <a href="#">h</a>
                        <a href="#">i</a>
                        <a href="#">j</a>
                        <a href="#">k</a>
                        <a href="#">l</a>
                        <a href="#">m</a>
                        <a href="#">n</a>
                        <a href="#">o</a>
                        <a href="#">p</a>
                        <a href="#">q</a>
                        <a href="#">r</a>
                        <a href="#">s</a>
                        <a href="#">t</a>
                        <a href="#">u</a>
                        <a href="#">v</a>
                        <a href="#">w</a>
                        <a href="#">x</a>
                        <a href="#">y</a>
                        <a href="#">z</a>
                    </div>
                </div>
                <div class="col-12 girl">
                    <div class="col-6 names-by-letter mx-auto">
                        <span>Girls name: </span>
                        <a href="#">a</a>
                        <a href="#">b</a>
                        <a href="#">c</a>
                        <a href="#">d</a>
                        <a href="#">e</a>
                        <a href="#">f</a>
                        <a href="#">g</a>
                        <a href="#">h</a>
                        <a href="#">i</a>
                        <a href="#">j</a>
                        <a href="#">k</a>
                        <a href="#">l</a>
                        <a href="#">m</a>
                        <a href="#">n</a>
                        <a href="#">o</a>
                        <a href="#">p</a>
                        <a href="#">q</a>
                        <a href="#">r</a>
                        <a href="#">s</a>
                        <a href="#">t</a>
                        <a href="#">u</a>
                        <a href="#">v</a>
                        <a href="#">w</a>
                        <a href="#">x</a>
                        <a href="#">y</a>
                        <a href="#">z</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Alphabitacally Search end -->

    <!-- Name blogs start -->
    <section id="name-blog">
        <div class="container">
            <div class="row">
                <div class="col-4 pl-0">
                    <div class="left-item">
                        <div class="left-top">
                            <img src="{{asset('/')}}name/images/img1.png" alt="img1" class="img-fluid">
                            <div class="overlay">
                                <a href="#"><img src="{{asset('/')}}name/images/shape-border.png" alt="border" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="left-bottom">
                            <img src="{{asset('/')}}name/images/experince.jpg" alt="expericnce" class="img-fluid">
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{asset('/')}}name/images/blog1.png" alt="blog1" class="img-fluid">
                                            <div class="overlay2">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-share-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="commnets-like">
                                            <a href="#"><i class="fa fa-user"></i> Post by: Admin</a>
                                            <span>
                                            <a href="#"><i class="fa fa-eye"></i> 2.3k</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i> 1.8k</a>
                                            <a href="#"><i class="fa fa-comments"></i> 1.3k</a>
                                        </span>
                                        </div>
                                        <h3>Aqeeqah For New Born Muslim</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        <a class="read" href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="col-6 pr-0">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{asset('/')}}name/images/blog2.png" alt="blog1" class="img-fluid">
                                            <div class="overlay2">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-share-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="commnets-like">
                                            <a href="#"><i class="fa fa-user"></i> Post by: Admin</a>
                                            <span>
                                            <a href="#"><i class="fa fa-eye"></i> 2.3k</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i> 1.8k</a>
                                            <a href="#"><i class="fa fa-comments"></i> 1.3k</a>
                                        </span>
                                        </div>
                                        <h3>Teaching Islam to our Children</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        <a class="read" href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="col-6 pr-0">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{asset('/')}}name/images/blog3.png" alt="blog1" class="img-fluid">
                                            <div class="overlay2">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-share-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="commnets-like">
                                            <a href="#"><i class="fa fa-user"></i> Post by: Admin</a>
                                            <span>
                                            <a href="#"><i class="fa fa-eye"></i> 2.3k</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i> 1.8k</a>
                                            <a href="#"><i class="fa fa-comments"></i> 1.3k</a>
                                        </span>
                                        </div>
                                        <h3>Shaving the head For Newborn</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        <a class="read" href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="col-6 pr-0">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{asset('/')}}name/images/blog4.png" alt="blog1" class="img-fluid">
                                            <div class="overlay2">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-share-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="commnets-like">
                                            <a href="#"><i class="fa fa-user"></i> Post by: Admin</a>
                                            <span>
                                            <a href="#"><i class="fa fa-eye"></i> 2.3k</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i> 1.8k</a>
                                            <a href="#"><i class="fa fa-comments"></i> 1.3k</a>
                                        </span>
                                        </div>
                                        <h3>Aqeeqah For New Born Muslim</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        <a class="read" href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="succes-banner">
                    <img src="{{asset('/')}}name/images/success.jpg" alt="success" class="img-fluid">
                    <a href="#">Join Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Name blogs end -->
@endsection