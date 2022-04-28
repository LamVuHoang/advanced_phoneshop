@extends('OganiMaster')

@section('title', 'Home page')

@section('hero-normal')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Brands</span>
                        </div>
                        <ul>
                            @foreach ($thuong_hieu as $item)
                                <li>
                                    <a href="{{ url("thuong-hieu/chi-tiet/$item->ma_thuong_hieu") }}">
                                        {{ $item->ten_thuong_hieu }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{ url('tim-kiem') }}" method="POST">
                            @csrf
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" name="keyword" placeholder="What do you need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 {{ $cua_hang->dien_thoai }}</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <a href="{{ $banner[0]->url }}">
                        <div class="hero__item set-bg"
                            data-setbg="{{ URL::asset('storage/my_resources') }}/banner/{{ $banner[0]->hinh_banner }}">
                            <div class="hero__text">
                                {{-- <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a> --}}
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
@endsection

@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($thuong_hieu as $item)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg"
                                data-setbg="{{ URL::asset('storage/my_resources') }}/thuong_hieu/{{ $item->logo }}">
                                <h5><a href="#">{{ $item->ten_thuong_hieu }}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    {{-- <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="{{ URL::asset('storage/ogani_resources') }}/img/featured/feature-1.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="{{ URL::asset('storage/ogani_resources') }}/img/featured/feature-2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="{{ URL::asset('storage/ogani_resources') }}/img/featured/feature-3.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="{{ URL::asset('storage/ogani_resources') }}/img/featured/feature-4.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="{{ URL::asset('storage/ogani_resources') }}/img/featured/feature-5.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="{{ URL::asset('storage/ogani_resources') }}/img/featured/feature-6.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="{{ URL::asset('storage/ogani_resources') }}/img/featured/feature-7.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="{{ URL::asset('storage/ogani_resources') }}/img/featured/feature-8.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Featured Section End -->

    <div style="height: 10vh; width: 100%"></div>

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="{{ $banner[1]->url }}">
                        <div class="banner__pic">
                            <img src="{{ URL::asset('storage/my_resources') }}/banner/{{ $banner[1]->hinh_banner }}"
                                alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="{{ $banner[2]->url }}">
                        <div class="banner__pic">
                            <img src="{{ URL::asset('storage/my_resources') }}/banner/{{ $banner[2]->hinh_banner }}"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sale Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            @foreach ($sale_products as $key)
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($key as $item)
                                        <a href="{{ url("san-pham/chi-tiet/$item->ten_url") }}"
                                            class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ URL::asset('storage/my_resources') }}/san_pham/{{ $item->hinh1 }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{ $item->ten_san_pham }}</h6>
                                                <span>{{ number_format($item->don_gia) }} VND</span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Android Devices</h4>
                        <div class="latest-product__slider owl-carousel">
                            @foreach ($android_products as $key)
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($key as $item)
                                        <a href="{{ url("san-pham/chi-tiet/$item->ten_url") }}"
                                            class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ URL::asset('storage/my_resources') }}/san_pham/{{ $item->hinh1 }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{ $item->ten_san_pham }}</h6>
                                                <span>{{ number_format($item->don_gia) }} VND</span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>iOS Devices</h4>
                        <div class="latest-product__slider owl-carousel">
                            @foreach ($ios_product as $key)
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($key as $item)
                                        <a href="{{ url("san-pham/chi-tiet/$item->ten_url") }}"
                                            class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ URL::asset('storage/my_resources') }}/san_pham/{{ $item->hinh1 }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{ $item->ten_san_pham }}</h6>
                                                <span>{{ number_format($item->don_gia) }} VND</span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($random_news as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ URL::asset('storage/my_resources') }}/tin_tuc/{{ $item->hinh }}" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>

                                    <li>
                                        <i class="fa fa-calendar-o"></i>
                                        <?php
                                        $created_at = new DateTime($item->created_at);
                                        echo $created_at->format('M d, Y');
                                        ?>
                                    </li>
                                    {{-- <li><i class="fa fa-comment-o"></i> 5</li> --}}
                                </ul>
                                <h5>
                                    <a href="{{ url("tin-tuc/chi-tiet/$item->id") }}">
                                        {{ $item->tieu_de }}
                                    </a>
                                </h5>
                                <p>{{ $item->tom_tat }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
