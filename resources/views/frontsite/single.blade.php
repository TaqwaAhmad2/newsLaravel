@extends('frontsite.layout.master')

@section('title')
    single page
@endsection
@section('content')

    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Recent News</div>
            <div class="owl-carousel owl-theme" id="slider2">
            </div>
            @foreach($posts as $post)
                <div class="item px-2"><a href="">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{asset('post_images/'.$post->post_image)}}"
                                                             alt=""/>
                            </div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span
                                        class="">{{$post->title}}</span></a>
                                <a href="#" class="d-block fh5co_small_post_heading"><span
                                        class="">{{$post->desc}}</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i>{{$post->created_at}}</div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
        </div>
    </div>

@endsection
