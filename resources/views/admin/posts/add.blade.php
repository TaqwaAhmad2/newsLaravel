add post


@extends('admin.layout.master')
@section('title')
    Add Post
@endsection
@section('page_title')
    Add post
@endsection

@section('content')
    {{--    {{Session::get('project')}}--}}
    {{--    {{Session::forget('project')}}--}}
    @include('admin.layout.message')
    <section class="content">
        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Post title</label>
                                <input type="text" id="title" name="title" value="{{old('title')}}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">saml description</label>
                                <textarea id="inputDescription" name="desc" class="form-control" rows="4">
                               {{old('desc')}}
                            </textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Post body</label>
                                <textarea id="inputDescription" name="body" class="form-control" rows="4">
                               {{old('body')}}
                            </textarea>
                            </div>
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="inputName">Enter the author id</label>
                                    <input type="text" id="inputDescription" name="author_id" class="form-control"

                                           value="  {{old('author_id')}}"

                                    >
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile"
                                           name="post_image">
                                    <label class="custom-file-label" for="exampleInputFile">select image</label>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Status</label>
                                    <select id="inputStatus" name="cat_id" class="form-control custom-select">
                                        <option selected disabled>Select one</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Create new Post" class="btn btn-success float-right">
                    </div>
                </div>
        </form>
    </section>
@endsection
