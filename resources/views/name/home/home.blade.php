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
                        <a href="{{ url('/boys') }}/a">a</a>
                        <a href="{{ url('/boys') }}/b">b</a>
                        <a href="{{ url('/boys') }}/c">c</a>
                        <a href="{{ url('/boys') }}/d">d</a>
                        <a href="{{ url('/boys') }}/e">e</a>
                        <a href="{{ url('/boys') }}/f">f</a>
                        <a href="{{ url('/boys') }}/g">g</a>
                        <a href="{{ url('/boys') }}/h">h</a>
                        <a href="{{ url('/boys') }}/i">i</a>
                        <a href="{{ url('/boys') }}/j">j</a>
                        <a href="{{ url('/boys') }}/k">k</a>
                        <a href="{{ url('/boys') }}/l">l</a>
                        <a href="{{ url('/boys') }}/m">m</a>
                        <a href="{{ url('/boys') }}/n">n</a>
                        <a href="{{ url('/boys') }}/o">o</a>
                        <a href="{{ url('/boys') }}/p">p</a>
                        <a href="{{ url('/boys') }}/q">q</a>
                        <a href="{{ url('/boys') }}/r">r</a>
                        <a href="{{ url('/boys') }}/s">s</a>
                        <a href="{{ url('/boys') }}/t">t</a>
                        <a href="{{ url('/boys') }}/u">u</a>
                        <a href="{{ url('/boys') }}/v">v</a>
                        <a href="{{ url('/boys') }}/w">w</a>
                        <a href="{{ url('/boys') }}/x">x</a>
                        <a href="{{ url('/boys') }}/y">y</a>
                        <a href="{{ url('/boys') }}/z">z</a>
                    </div>
                </div>
                <div class="col-12 girl">
                    <div class="col-6 names-by-letter mx-auto">
                        <span>Girls name: </span>
                        <a href="{{ url('/girls') }}/a">a</a>
                        <a href="{{ url('/girls') }}/b">b</a>
                        <a href="{{ url('/girls') }}/c">c</a>
                        <a href="{{ url('/girls') }}/d">d</a>
                        <a href="{{ url('/girls') }}/e">e</a>
                        <a href="{{ url('/girls') }}/f">f</a>
                        <a href="{{ url('/girls') }}/g">g</a>
                        <a href="{{ url('/girls') }}/h">h</a>
                        <a href="{{ url('/girls') }}/i">i</a>
                        <a href="{{ url('/girls') }}/j">j</a>
                        <a href="{{ url('/girls') }}/k">k</a>
                        <a href="{{ url('/girls') }}/l">l</a>
                        <a href="{{ url('/girls') }}/m">m</a>
                        <a href="{{ url('/girls') }}/n">n</a>
                        <a href="{{ url('/girls') }}/o">o</a>
                        <a href="{{ url('/girls') }}/p">p</a>
                        <a href="{{ url('/girls') }}/q">q</a>
                        <a href="{{ url('/girls') }}/r">r</a>
                        <a href="{{ url('/girls') }}/s">s</a>
                        <a href="{{ url('/girls') }}/t">t</a>
                        <a href="{{ url('/girls') }}/u">u</a>
                        <a href="{{ url('/girls') }}/v">v</a>
                        <a href="{{ url('/girls') }}/w">w</a>
                        <a href="{{ url('/girls') }}/x">x</a>
                        <a href="{{ url('/girls') }}/y">y</a>
                        <a href="{{ url('/girls') }}/z">z</a>
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
