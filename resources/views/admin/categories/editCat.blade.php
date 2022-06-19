 add post


@extends('admin.layout.master')
@section('title')
    Edit Category
@endsection
@section('page_title')
    Edit Category
@endsection

@section('content')
    <section class="content">
        <form method="post"  action="{{route('category.update', $category)}}">
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
                            <label for="inputName">Category title</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{$category->title}}">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Category code</label>
                            <textarea id="inputDescription" name="code" class="form-control" rows="4"> {{$category->code}}</textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                   name="new_cat_image">
                            <label class="custom-file-label" for="exampleInputFile">select image</label>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="inputStatus">Status</label>--}}
{{--                            <select id="inputStatus" name="cat_id" class="form-control custom-select">--}}
{{--                                @foreach($categories as $category)--}}
{{--                                    <option value="{{$category->id}}"--}}
{{--                                        {{$post->cat_id== $category->id? 'selected':'' }}--}}
{{--                                    >{{$category->title}}</option>--}}

{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}

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
