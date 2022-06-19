add post


@extends('admin.layout.master')
@section('title')
    Add User
@endsection
@section('page_title')
    Add User
@endsection

@section('content')
    <section class="content">
        <form method="post" action="{{route('author.store')}}", enctype="multipart/form-data">
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
                            <label for="inputName">Author Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="inputEmail">User id</label>--}}
{{--                            <input type="text" name="email" class="form-control" rows="4">--}}
{{--                        </div> <div class="form-group">--}}
{{--                            <label for="inputEmail">User Email</label>--}}
{{--                            <input type="text" name="email" class="form-control" rows="4">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="inputPass">Password</label>--}}
{{--                            <input type="password" name="password" class="form-control" rows="4">--}}
{{--                        </div>--}}
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                   name="author_img">
                            <label class="custom-file-label" for="exampleInputFile">select image</label>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="inputStatus">Status</label>--}}
{{--                            <select id="inputStatus" name="cat_id" class="form-control custom-select">--}}
{{--                                <option selected disabled>Select one</option>--}}
{{--                                @foreach($categories as $category)--}}
{{--                                <option value="{{$category->id}}">{{$category->title}}</option>--}}
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
                <input type="submit" value="Add new Admin" class="btn btn-success float-right">
            </div>
        </div>
    </form>
    </section>
@endsection
