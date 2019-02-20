@extends('name.master')

@section('InfiniteName')
    Boys Name
@endsection

@section('boys_name')
    active
@endsection

@section('content')

    <section id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12 title">
                    <a href="{{ asset('/') }}"><span>Home</span> </a><a href="name-details.html">> Search</a>
                </div>
            </div>
        </div>
    </section>
    <!-- page title Part end -->

    <!-- Name blogs start -->
    <section id="name-blog">
        <div class="container">
            <div class="row">
                <div class="col-4 pl-0 order-sm-2 order-2 order-md-1">
                    <div class="left-item">
                        <div class="left-top-one">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCreativeITInstitute&tabs=timeline&width=365&height=310&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="365" height="310" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </div>
                        <div class="left-top tahsan-class-2">
                            <img src="{{asset('/')}}name/images/img1.png" alt="img1" class="img-fluid">
                            <div class="overlay">
                                <a href="#"><img src="{{asset('/')}}name/images/shape-border.png" alt="border" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 order-sm-1 order-1 order-md-2 pr-0">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><span>Pages</span></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#">05</a></li>
                            <!-- <li class="page-item extra-class-2">
                                <input class="page-link" type="text">
                            </li> -->
                            <li class="page-item"><span>of</span></li>
                            <li class="page-item"><a class="page-link" href="#">2017</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                    <div class="search-name-heading text-center">
                        <p>Click On Names For Details</p>
                    </div>
                    <div class="name-details">
                        <table class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">English Meaning</th>
                                <th class="ban" scope="col">বাংলা অর্থ</th>
                                <th scope="col">Ratings</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($searched_names as $searched_name)
                            <tr>
                                <td class="name-class"><a href="{{route('namedetails', $searched_name->id)}}">{{ $searched_name->name }}</a></td>
                                <td class="eng-mean">{{ $searched_name->english_meaning }}</td>
                                <td class="ban-mean">{{ $searched_name->bangla_meaning }}</td>
                                <td class="rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-empty"></i>
                                </td>
                            </tr>
                            @empty
                            <tr>
                              <td colspan="4">Nothing to show you this time. <a href="#">Want to suggest us?</a></td>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="succes-banner">
                    <img src="{{asset('/')}}name/images/success.jpg" alt="success" class="img-fluid">
                    <a href="#">Join Now</a>
                </div>
            </div>
            <div class="row tahsan-class">
                <div class="col-4 pl-0 order-sm-3 order-md-1">
                    <div class="blog-item tahsan-class-2">
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
                        <a class="read" href="#">Read More <i class="fa fa-long-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="col-8 order-sm-1 order-1 order-md-2 pr-0">
                    <div class="name-details">
                        {{--
                          <table class="table table-bordered text-center">
                              <tbody>
                              <tr>
                                  <td class="name-class"><a href="{{route('namedetails', $searched_name->id)}}">Aabidah</a></td>
                                  <td class="eng-mean">Worshipper of Allah</td>
                                  <td class="ban-mean">ঈশ্বরের পুজারী</td>
                                  <td class="rate">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-empty"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="name-class"><a href="{{route('namedetails', $searched_name->id)}}">Aabidah</a></td>
                                  <td class="eng-mean">Worshipper of Allah</td>
                                  <td class="ban-mean">ঈশ্বরের পুজারী</td>
                                  <td class="rate">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-empty"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="name-class"><a href="{{route('namedetails', $searched_name->id)}}">Aabidah</a></td>
                                  <td class="eng-mean">Worshipper of Allah</td>
                                  <td class="ban-mean">ঈশ্বরের পুজারী</td>
                                  <td class="rate">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-empty"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="name-class"><a href="{{route('namedetails', $searched_name->id)}}">Aabidah</a></td>
                                  <td class="eng-mean">Worshipper of Allah</td>
                                  <td class="ban-mean">ঈশ্বরের পুজারী</td>
                                  <td class="rate">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-empty"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="name-class"><a href="{{route('namedetails', $searched_name->id)}}">Aabidah</a></td>
                                  <td class="eng-mean">Worshipper of Allah</td>
                                  <td class="ban-mean">ঈশ্বরের পুজারী</td>
                                  <td class="rate">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-empty"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="name-class"><a href="{{route('namedetails', $searched_name->id)}}">Aabidah</a></td>
                                  <td class="eng-mean">Worshipper of Allah</td>
                                  <td class="ban-mean">ঈশ্বরের পুজারী</td>
                                  <td class="rate">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-empty"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="name-class"><a href="{{route('namedetails', $searched_name->id)}}">Aabidah</a></td>
                                  <td class="eng-mean">Worshipper of Allah</td>
                                  <td class="ban-mean">ঈশ্বরের পুজারী</td>
                                  <td class="rate">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-empty"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="name-class"><a href="{{route('namedetails', $searched_name->id)}}">Aabidah</a></td>
                                  <td class="eng-mean">Worshipper of Allah</td>
                                  <td class="ban-mean">ঈশ্বরের পুজারী</td>
                                  <td class="rate">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-empty"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="name-class"><a href="{{route('namedetails', $searched_name->id)}}">Aabidah</a></td>
                                  <td class="eng-mean">Worshipper of Allah</td>
                                  <td class="ban-mean">ঈশ্বরের পুজারী</td>
                                  <td class="rate">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-empty"></i>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                        --}}
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><span>Pages</span></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#">05</a></li>
                            <!-- <li class="page-item extra-class-2">
                                <input class="page-link" type="text">
                            </li> -->
                            <li class="page-item"><span>of</span></li>
                            <li class="page-item"><a class="page-link" href="#">2017</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--
        <div class="row bottom-pagination justify-content-center">
            <nav aria-label="Page navigation example col-12 order-2">
                <ul class="pagination">
                   <li class="page-item"><span>Pages</span></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                    <li class="page-item"><a class="page-link" href="#">05</a></li>
                    <li class="page-item extra-class-2"><input class="page-link" type="text"></li>
                    <li class="page-item"><span>of</span></li>
                    <li class="page-item"><a class="page-link" href="#">2017</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </nav>
        </div>
-->
        </div>
    </section>

@endsection
