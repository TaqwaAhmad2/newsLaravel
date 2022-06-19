@extends('frontsite.layout.master')
@section('title')
    authors  page
@endsection
@section('content')

        <div id="fh5co-staff">
        <div class="container">
            <div class="row">
                @foreach($authors as $author)

                <div class="col-md-3 text-center">
                    <div class="staff">
                        <div class="staff-img" style="background-image: url({{asset('author_images/'.$author->author_image)}});">
                            <ul class="fh5co-social">
                                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                                <li><a href="#"><i class="icon-github"></i></a></li>
                            </ul>
                        </div>
                        <h3><a href="#"> {{$author->name}}</a></h3>
                    </div>
                </div>

@endforeach
            </div>
        </div>
        </div>


@endsection


