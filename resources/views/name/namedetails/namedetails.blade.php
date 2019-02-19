@extends('name.master')

@section('InfiniteName')
    Name Details
@endsection
@section('content')
    <section id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12 title">
                    <a href="{{ url('/') }}"><span>Home</span> </a><a href="name-details.html"> > {{ $name->name }}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- page title Part end -->

    <!-- Name blogs start -->
    <section id="name-blog">
        <div class="container">
            <div class="row">
                <div class="col-4 order-2 order-md-1">
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
                <div class="col-8 order-1 order-md-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <div class="name-bg text-center">
                                    <h3>{{ $name->name }}</h3>
                                </div>
                            </div>
                            <div class="name-text">
                                <div class="col-12">
                                    <div class="row details-name">
                                        <div class="col-3 pl-0"><p>Gender</p></div>
                                        <div class="col-9 pr-0"><span>: {{($name->gender == 1)? "Male":"Female"}}</span></div>
                                    </div>
                                    <div class="row details-name">
                                        <div class="col-3 pl-0"><p>Origin</p></div>
                                        <div class="col-9 pr-0"><span>: {{$name->origin}}</span></div>
                                    </div>
                                    <div class="row details-name">
                                        <div class="col-3 pl-0"><p>English Meaning</p></div>
                                        <div class="col-9 pr-0"><span>: {{$name->english_meaning}}</span></div>
                                    </div>
                                    <div class="row details-name">
                                        <div class="col-3 pl-0"><p>Bangla Meaning</p></div>
                                        <div class="col-9 pr-0"><span>: {{$name->bangla_meaning}}</span></div>
                                    </div>
                                    <div class="row details-name">
                                        <div class="col-3 pl-0"><p>Ratings</p></div>
                                        <div class="col-9 pr-0"><span>:
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-empty"></i>
                                    <i class="fa fa-star-o"></i>
                                    </span></div>
                                    </div>
                                    <div class="row details-name">
                                        <div class="col-3 pl-0"><p>Views</p></div>
                                        <div class="col-9 pr-0"><span>: 19k</span></div>
                                    </div>
                                    <div class="row details-name">
                                        <div class="col-3 pl-0"><p>Similiar Names</p></div>
                                        <div class="col-9 similar-name pr-0"><span>: <a href="#">Aabdar</a>, <a href="#">Aabid</a>, <a href="#">Aabidullah</a>, <a href="#">Aabir</a>, <a href="#">Aabis</a>, <a href="#">Aabzaari</a>, <a href="#">Aabzari</a>, <a href="#">Aabidah</a>, &nbsp;&nbsp;<a href="#">Aabira</a>, <a href="#">Aabirah</a>, <a href="#">Aabish</a>, <a href="#">Aabroo</a> </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="share">
                                <ul>
                                    <li><span>Share in:</span></li>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fa fa-behance"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="comments">
                                <img src="{{asset('/')}}name/images/fb-cmnt.jpg" alt="fb-comment" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 succes-banner">
                    <img src="{{asset('/')}}name/images/success.jpg" alt="success" class="img-fluid">
                    <a href="#">Join Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Name blogs end -->
@endsection
