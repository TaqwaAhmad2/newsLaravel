@extends('admin.layout.master')
@section('title')
    Authors
@endsection
@section('page_title')
    Authors
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Authors</h3>

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
{{--                        <th style="width: 20%">--}}
{{--                            Image--}}
{{--                        </th>--}}

                        <th style="width: 20%">
                            Author Name
                        </th>

                        <th style="width: 20%">
                            Image
                        </th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($author as $auth)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
{{--                            <td>--}}
{{--                                <ul class="list-inline">--}}
{{--                                    <li class="list-inline-item">--}}
{{--                                        <img alt="Avatar" class="table-avatar" src="'author_images/'.$user->user_image">--}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </td>--}}
                            <td>
                                <a>
                                    {{$auth->name }}
                                </a>

                            </td>
{{--                            <td>--}}

{{--                                    {{$user->email}}--}}
{{--                            </td>--}}
{{--                            <td>--}}
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" width="150" src="{{asset('author_images/'.$auth->author_image)}}">

                                    </li>

                                </ul>

                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{route('author.show',$auth)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('author.edit',$auth)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form  method="post" action="{{route('author.destroy',$auth)}}">
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
