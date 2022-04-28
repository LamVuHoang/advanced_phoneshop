@extends('OganiMaster')

@if (isset($title))
    @section('title', $title)
@else
    @section('title', 'Shop')
@endif

@section('hero-normal')
    @parent
@endsection

@section('content')
    <pre>
        {{ print_r($data_max) }}
    </pre>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ URL::asset('storage/my_resources') }}/banner/breadcrumb.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        @if (isset($title))
                            <h2>{{ $title }}</h2>
                        @else
                            <h2>Phone Shop</h2>
                        @endif
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <form action="" method="post">
                            @csrf
                            <div class="sidebar__item">
                                <h4>Brands</h4>
                                <ul>
                                    @foreach ($thuong_hieu as $item)
                                        <li>
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    name="{{ $item->ma_thuong_hieu }}" id="" value="1">
                                                {{ $item->ten_thuong_hieu }}
                                            </label>
                                            <a href="{{ url("thuong-hieu/chi-tiet/$item->ma_thuong_hieu") }}">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="sidebar__item">
                                <h4>Price</h4>
                                <div class="price-range-wrap">
                                    <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                        data-min="{{ $data_min }}" data-max="{{ $data_max }}">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    </div>
                                    <div class="range-slider">
                                        <div class="price-input">
                                            <span>From</span>
                                            <input type="text" id="minamount">
                                            <br>
                                            <span>To</span>
                                            <input type="text" id="maxamount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    White
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Gray
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Red
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div> --}}
                            {{-- <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Large
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Medium
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Small
                                    <input type="radio" id="small">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Tiny
                                    <input type="radio" id="tiny">
                                </label>
                            </div>
                        </div> --}}
                            <div class="sidebar__item text-center">
                                <button type="submit" class="btn btn-success btn-lg">Find Products</button>
                            </div>
                        </form>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>
                                <div class="latest-product__slider owl-carousel">
                                    @foreach ($latest_products as $arr)
                                        <div class="latest-prdouct__slider__item">
                                            @foreach ($arr as $item)
                                                <a href="{{ url('san-pham/chi-tiet/' . $item['ten_url']) }}"
                                                    class="latest-product__item">
                                                    <div class="latest-product__item__pic">
                                                        <img src="{{ URL::asset('storage/my_resources') }}/san_pham/{{ $item['hinh1'] }}"
                                                            alt="">
                                                    </div>
                                                    <div class="latest-product__item__text">
                                                        <h6>{{ $item['ten_san_pham'] }}</h6>
                                                        <span>{{ number_format($item['don_gia'] / 1000) }} k</span>
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
                <div class="col-lg-9 col-md-7">
                    @if (isset($sale_products))
                        <div class="product__discount">
                            <div class="section-title product__discount__title">
                                <h2>Sale Off</h2>
                            </div>
                            <div class="row">
                                <div class="product__discount__slider owl-carousel">
                                    @foreach ($sale_products as $item)
                                        <div class="col-lg-4">
                                            <div class="product__discount__item">
                                                <div class="product__discount__item__pic set-bg"
                                                    data-setbg="{{ URL::asset('storage/my_resources') }}/san_pham/{{ $item->hinh1 }}">
                                                    <div class="product__discount__percent">
                                                        - {{ number_format($item->giam_gia->so_tien_giam_gia) }}
                                                    </div>
                                                    <ul class="product__item__pic__hover">
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product__discount__item__text">
                                                    <span>Dried Fruit</span>
                                                    <h5>
                                                        <a href="{{ url("san-pham/chi-tiet/$item->ten_url") }}">
                                                            {{ $item->ten_san_pham }}
                                                        </a>
                                                    </h5>
                                                    <div class="product__item__price">
                                                        {{ number_format($item->don_gia - $item->giam_gia->so_tien_giam_gia) }}
                                                        VND
                                                        <span>{{ number_format($item->don_gia) }} VND</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                {{-- <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>{{ $product_count }}</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                {{-- <div class="filter__option">
                                        <span class="icon_grid-2x2"></span>
                                        <span class="icon_ul"></span>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($products as $item)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ URL::asset('storage/my_resources') }}/san_pham/{{ $item->hinh1 }}">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6>
                                            <a href="{{ url("san-pham/chi-tiet/$item->ten_url") }}">
                                                {{ $item->ten_san_pham }}
                                            </a>
                                        </h6>
                                        <h5>{{ number_format($item->don_gia) }} VND</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="product__pagination">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div> --}}
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
    </section>
    <!-- Product Section End -->
@endsection
