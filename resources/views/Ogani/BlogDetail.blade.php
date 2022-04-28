@extends('OganiMaster')

@section('title', $tin_tuc->tieu_de)

@section('hero-normal')
    @parent
@endsection

@section('content')
    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg"
        data-setbg="{{ URL::asset('storage/my_resources') }}/banner/blog_detail_banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>{{ $tin_tuc->tieu_de }}</h2>
                        <ul>
                            <li>By {{ $tin_tuc->user->name }}</li>
                            <li>
                                <?php
                                $created_at = new DateTime($tin_tuc->created_at);
                                echo $created_at->format('M d, Y');
                                ?>
                            </li>
                            {{-- <li>8 Comments</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        {{-- <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">Beauty (20)</a></li>
                                <li><a href="#">Food (5)</a></li>
                                <li><a href="#">Life Style (9)</a></li>
                                <li><a href="#">Travel (10)</a></li>
                            </ul>
                        </div> --}}
                        <div class="blog__sidebar__item">
                            <h4>Recent News</h4>
                            <div class="blog__sidebar__recent">
                                @foreach ($recent_news as $item)
                                    <a href="{{ url("tin-tuc/chi-tiet/$item->id") }}" class="blog__sidebar__recent__item">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="blog__sidebar__recent__item__pic">
                                                    <img src="{{ URL::asset('storage/my_resources') }}/tin_tuc/{{ $item->hinh }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="blog__sidebar__recent__item__text">
                                                    <h6>{{ $item->tieu_de }}</h6>
                                                    <span>
                                                        <?php
                                                        $created_at = new DateTime($item->created_at);
                                                        echo $created_at->format('M d, Y');
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Apple</a>
                                <a href="#">Beauty</a>
                                <a href="#">Vegetables</a>
                                <a href="#">Fruit</a>
                                <a href="#">Healthy Food</a>
                                <a href="#">Lifestyle</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="{{ URL::asset('storage/my_resources') }}/tin_tuc/{{ $tin_tuc->hinh }}" alt="">
                        {!! $tin_tuc->chi_tiet !!}
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="{{ URL::asset('storage/ogani_resources') }}/img/blog/details/details-author.jpg"
                                            alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>{{ $tin_tuc->user->name }}</h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> Food</li>
                                        <li><span>Tags:</span> All, Trending, Cooking, Healthy Food, Life Style</li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Post You May Like</h2>
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
    <!-- Related Blog Section End -->
@endsection
