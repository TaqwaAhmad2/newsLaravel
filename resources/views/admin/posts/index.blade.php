@extends('admin.layout.master')
@section('title')
    Post
@endsection
@section('page_title')
    Post
@endsection

@section('content')
{{--    @include('admin.layout.message')--}}
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 10%">
                            Post Title
                        </th>
                        <th style="width: 20%">
                            Post description
                        </th>
                        <th style="width: 20%">
                            Image
                        </th>

                        <th>
                            Category
                        </th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                <a>
                                    {{$post->title }}
                                </a>
                                <br/>
                                <small>
                                    {{$post->created_at }}
                                </small>
                            </td>
                            <td>
                                <a>
                                    {{$post->desc }}
                                </a>

                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" width="150" src="{{asset('post_images/'.$post->post_image)}}">

                                    </li>

                                </ul>

                            </td>
{

                            <td>
{{--                                @dd($post->cat)--}}
{{--                                {{$post->cat->title}}--}}

                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{route('post.show',$post)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('post.edit',$post)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form method="post" action="{{route('post.destroy',$post)}}">
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
        {{$posts->links()}}

    </section>

@endsection
