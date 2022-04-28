@extends('OganiMaster')

@section('title', 'Blog')

@section('hero-normal')
    @parent
@endsection

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ URL::asset('storage/my_resources') }}/banner/breadcrumb.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
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
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        @foreach ($tin_tuc as $item)
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="{{ URL::asset('storage/my_resources') }}/tin_tuc/{{ $item->hinh }}"
                                            alt="">
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
                                        <h5><a href="{{ url("tin-tuc/chi-tiet/$item->id") }}">{{ $item->tieu_de }}</a></h5>
                                        <p>{{ $item->tom_tat }}</p>
                                        <a href="{{ url("tin-tuc/chi-tiet/$item->id") }}" class="blog__btn">READ MORE <span
                                                class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                {{-- <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a> --}}
                                {{ $tin_tuc->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
