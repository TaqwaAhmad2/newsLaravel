add post


@extends('admin.layout.master')
@section('title')
    Edit Post
@endsection
@section('page_title')
    Edit post
@endsection

@section('content')
    <section class="content">
        <form method="post" action="{{route('post.update', $post)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
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
                                <input type="text" id="title" name="title" class="form-control"
                                       value="{{$post->title}}">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Post body</label>
                                <textarea id="inputDescription" name="body" class="form-control"
                                          rows="4"> {{$post->body}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">saml description</label>
                                <textarea id="inputDescription" name="desc" class="form-control" rows="4">
                               {{$post->desc}}
                            </textarea>
                            </div>
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="inputName">Enter the id for new author</label>
                                    <input type="text" id="inputDescription" name="author_id" class="form-control"
                                           @foreach($authors as $author)
                                               @if($post->author_id == $author->id)
                                                   value="{{$author->name}}"
                                        @endif
                                        @endforeach
                                    >
                                </div>


                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                       name="post_new_image">
                                <label class="custom-file-label" for="exampleInputFile">select image</label>
                            </div>

                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" name="cat_id" class="form-control custom-select">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{$post->cat_id== $category->id? 'selected':'' }}
                                        >{{$category->title}}</option>

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
                    <input type="submit" value="Update Post" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
