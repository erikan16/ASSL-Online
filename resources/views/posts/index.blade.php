@extends('main')

@section('title', '| Posts')

@section('logoURL')
    {{ url("teacher/welcome") }}
@endsection

@include('_navigation')

@section('content')
    <section class="content-header">
        <h1>All Posts</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('teacher/welcome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Posts</li>
        </ol>
        <div class="row">
            <div class="col-md-10">
            </div>
            <div class="col-md-2">
                <a href="{{ route('posts.create') }}" class="btn btn-block btn-primary btn-h1-spacing">Create New Post</a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="dataTables_wrapper">
                            <table class="table">
                                <thead>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Created At</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($post as $post)
                                        <tr>
                                            <td> {{ $post->post_id }} </td>
                                            <td> {{ $post->title }} </td>
                                            <td> {{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }} </td>
                                            <td> {{ date('M j, Y', strtotime($post->created_at)) }} </td>
                                            <td>
                                                <a href="{{ route('posts.show', $post->post_id) }}" class="btn btn-default">View</a>
                                                <a href="{{ route('posts.edit', $post->post_id) }}" class="btn btn-default">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection