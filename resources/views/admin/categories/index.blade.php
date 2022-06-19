@extends('admin.layout.master')
@section('title')
    Post
@endsection
@section('page_title')
    Post
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Categories</h3>

            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Category title
                        </th>
                        <th style="width: 10%">
                            Category code
                        </th>
                        <th style="width: 20%">
                            Image
                        </th>



                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                <a>
                                    {{$category->title }}
                                </a>

                            </td>
                            <td>

                                    {{$category->code}}
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" width="150" src="{{asset('category_images/'.$category->cat_image)}}">

                                    </li>

                                </ul>

                            </td>
{{--                            <td>--}}
{{--                                <ul class="list-inline">--}}
{{--                                    <li class="list-inline-item">--}}
{{--                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">--}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td class="project-state">--}}
{{--                                <span class="badge badge-success text-center">{{$post->shares}}</span>--}}
{{--                            </td>--}}
{{--                            <td class="project-state">--}}
{{--                                <span class="badge badge-success">{{$post->views}}</span>--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                {{$post->cat->title}}--}}
{{--                            </td>--}}
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{route('category.show',$category)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('category.edit',$category)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form  method="post" action="{{route('category.destroy',$category)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>

                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
