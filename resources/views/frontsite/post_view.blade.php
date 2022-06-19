@extends('frontsite.layout.master')

@section('title')
    post page
@endsection
@section('content')
    <div class="card card-widget">
        <div class="card-header">
            <div class="user-block">
                @foreach($authors as $author)
                    @if($author->id==$posts->author_id)
                        <img class="img-circle" src="{{asset('author_images/'.$author->author_image)}}" alt="User Image">

                        <span class="username"><a href="#">{{$author->name}}</a></span>
                        <span class="description">{{$posts->created_at}}</span>
            </div>

            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <h1> {{$posts->title}}</h1>
            <img class="img-fluid pad" src="{{asset('post_images/'.$posts->post_image)}}" alt="Photo">
            <p>{{$posts->body}}</p>
        </div>

    @endif
    @endforeach
@endsection
