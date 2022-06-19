@extends('admin.layout.master')
@section('title')
    post
@endsection
@section('content')

    <div class="card card-widget">
        <div class="card-header">
            <div class="user-block">

                @foreach($authors as $author)
                    @if($author->id==$post->author_id)
                        <img class="img-circle" src="{{asset('author_images/'.$author->author_image)}}"
                             alt="User Image">

                        <span class="username"><a href="#">{{$author->name}}</a></span>
                        <span class="description">{{$post->created_at}}</span>
            </div>

            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <h1> {{$post->title}}</h1>
            <img class="img-fluid pad" src="{{asset('post_images/'.$post->post_image)}}" alt="Photo">
            <p>{{$post->body}}</p>
        </div>

    @endif
    @endforeach

@endsection
