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
                            <form action="{{ url('search') }}" method="get">
                              <div class="input-group">
                                <input class="form-control aa" placeholder="Search your name" type="text" name="search_string">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Search</button>
                                </div>
                              </div>
                            </form>
                            <div class="which-name">
                                <a href="{{ url('/boys') }}">boys name</a>
                                <a href="{{ url('/girls') }}">girls name</a>
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
                        <a href="{{ url('/boys/alphabate') }}/a">a</a>
                        <a href="{{ url('/boys/alphabate') }}/b">b</a>
                        <a href="{{ url('/boys/alphabate') }}/c">c</a>
                        <a href="{{ url('/boys/alphabate') }}/d">d</a>
                        <a href="{{ url('/boys/alphabate') }}/e">e</a>
                        <a href="{{ url('/boys/alphabate') }}/f">f</a>
                        <a href="{{ url('/boys/alphabate') }}/g">g</a>
                        <a href="{{ url('/boys/alphabate') }}/h">h</a>
                        <a href="{{ url('/boys/alphabate') }}/i">i</a>
                        <a href="{{ url('/boys/alphabate') }}/j">j</a>
                        <a href="{{ url('/boys/alphabate') }}/k">k</a>
                        <a href="{{ url('/boys/alphabate') }}/l">l</a>
                        <a href="{{ url('/boys/alphabate') }}/m">m</a>
                        <a href="{{ url('/boys/alphabate') }}/n">n</a>
                        <a href="{{ url('/boys/alphabate') }}/o">o</a>
                        <a href="{{ url('/boys/alphabate') }}/p">p</a>
                        <a href="{{ url('/boys/alphabate') }}/q">q</a>
                        <a href="{{ url('/boys/alphabate') }}/r">r</a>
                        <a href="{{ url('/boys/alphabate') }}/s">s</a>
                        <a href="{{ url('/boys/alphabate') }}/t">t</a>
                        <a href="{{ url('/boys/alphabate') }}/u">u</a>
                        <a href="{{ url('/boys/alphabate') }}/v">v</a>
                        <a href="{{ url('/boys/alphabate') }}/w">w</a>
                        <a href="{{ url('/boys/alphabate') }}/x">x</a>
                        <a href="{{ url('/boys/alphabate') }}/y">y</a>
                        <a href="{{ url('/boys/alphabate') }}/z">z</a>
                    </div>
                </div>
                <div class="col-12 girl">
                    <div class="col-6 names-by-letter mx-auto">
                        <span>Girls name: </span>
                        <a href="{{ url('/girls/alphabate') }}/a">a</a>
                        <a href="{{ url('/girls/alphabate') }}/b">b</a>
                        <a href="{{ url('/girls/alphabate') }}/c">c</a>
                        <a href="{{ url('/girls/alphabate') }}/d">d</a>
                        <a href="{{ url('/girls/alphabate') }}/e">e</a>
                        <a href="{{ url('/girls/alphabate') }}/f">f</a>
                        <a href="{{ url('/girls/alphabate') }}/g">g</a>
                        <a href="{{ url('/girls/alphabate') }}/h">h</a>
                        <a href="{{ url('/girls/alphabate') }}/i">i</a>
                        <a href="{{ url('/girls/alphabate') }}/j">j</a>
                        <a href="{{ url('/girls/alphabate') }}/k">k</a>
                        <a href="{{ url('/girls/alphabate') }}/l">l</a>
                        <a href="{{ url('/girls/alphabate') }}/m">m</a>
                        <a href="{{ url('/girls/alphabate') }}/n">n</a>
                        <a href="{{ url('/girls/alphabate') }}/o">o</a>
                        <a href="{{ url('/girls/alphabate') }}/p">p</a>
                        <a href="{{ url('/girls/alphabate') }}/q">q</a>
                        <a href="{{ url('/girls/alphabate') }}/r">r</a>
                        <a href="{{ url('/girls/alphabate') }}/s">s</a>
                        <a href="{{ url('/girls/alphabate') }}/t">t</a>
                        <a href="{{ url('/girls/alphabate') }}/u">u</a>
                        <a href="{{ url('/girls/alphabate') }}/v">v</a>
                        <a href="{{ url('/girls/alphabate') }}/w">w</a>
                        <a href="{{ url('/girls/alphabate') }}/x">x</a>
                        <a href="{{ url('/girls/alphabate') }}/y">y</a>
                        <a href="{{ url('/girls/alphabate') }}/z">z</a>
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
