@extends('frontsite.layout.master')
@section('title')
    Home  page
@endsection


@section('content')

    <div id='{{asset('fh5co-course-categories')}}'>
        <div class='{{asset('container')}}'>
            <div class='{{asset('row animate-box')}}'>
                <div class=" {{asset('col-md-6 col-md-offset-3 text-center fh5co-heading')}}">
                    <h2>News categories</h2>
                    <p>Lorem Ipsum Lorm Lorm Lorm.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div class="owl-carousel owl-theme" id="slider2">

                @foreach($categories as $category)
                    <div class="item px-2"><a href="{{route('frontsite.single',$category->id)}}">

                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img
                                        src="{{asset('category_images/'.$category->cat_image)}}"
                                        alt="">
                                </div>
                                <div>
                                    <a href="#" class="d-block fh5co_small_post_heading"><span
                                            class="">{{$category->title}}</span></a>

                                    <div class="c_g"><i class="fa fa-clock-o"></i> {{$category->created_at}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-center">
                            <span class="icon"><i class="text-center "> <img src="images/menu.png"></i></span>
                            <span class="fh5co-counter js-counter text-center" data-fre om="0"
                                  data-to="" data-speed="1000"
                                  data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label text-center">Categories <br>{{$categories->count()}}</span>
                            <br>

                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class=" text-center"></i> <img src="images/newsa.png"></span>
                            <span class="fh5co-counter js-counter text-center" data-from="0"
                                  data-to="{{$posts->count()}}" data-speed="1000"
                                  data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label text-center ">News <br> {{$posts->count()}}</span>


                            <br>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i></i> <img src="images/poem.png"></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to=""
                                  data-speed="1000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">authors<br>{{$authors->count()}}


    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Recent News</div>
            <div class="owl-carousel owl-theme" id="slider2">
            </div>
                @foreach($last_posts as $last_post)
                    <div class="item px-2"><a href="">
{{--                    <div class="item px-2"><a href="{{route('frontsite.singlepost',$last_post)}}">--}}

                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="{{asset('post_images/'.$last_post->post_image)}}"
                                                                 alt=""/>
                                </div>
                                <div>
                                    <a href="#" class="d-block fh5co_small_post_heading"><span
                                            class="">{{$last_post->title}}</span></a>
                                    <a href="#" class="d-block fh5co_small_post_heading"><span
                                            class="">{{$last_post->desc}}</span></a>
                                    <div class="c_g"><i class="fa fa-clock-o"></i><span>{{$last_post->created_at}}</span></div>
                                </div>
                            </div>
                        </a>

                @endforeach
            </div>
        </div>







    {{--       <div class="row">--}}
    {{--                    <div class={{asset('col-md-6 animate-box')}}>--}}
    {{--                        <div class="course">--}}
    {{--                            <a href="#"> <img src="" class="course-img news">--}}
    {{--                            </a>--}}
    {{--                            <div class="description">--}}
    {{--                                <h3></h3>--}}
    {{--                                <p>{{$last_post->desc}}</p>--}}
    {{--                                <hr>--}}
    {{--                            </div>--}}


    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

@endsection

