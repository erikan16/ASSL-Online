@extends('main')

@section('title', '| View Post')

@include('_navigation')

@section('content')
    <section class="content-header">
        <h1 style="padding-bottom: 25px;"></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('teacher/welcome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/posts') }}">Posts</a></li>
            <li class="active"> {{ $post->title }}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <p class="lead">{{ $post->body }}</p>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>URL:</label>
                        <a href="{{ url('parent/'.$post->slug) }}">{{ url($post->slug) }}</a>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Created On:</label>
                        {{ date('M j, Y h:ia', strtotime($post->created_at)) }}
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Updated On:</label>
                        {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.edit', 'Edit', array($post->post_id), array('class' => 'btn btn-primary btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['posts.destroy', $post->post_id], 'method' => 'DELETE']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {!! Html::linkRoute('posts.index', 'All Posts', [], ['class' => 'btn btn-info btn-block btn-h1-spacing']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection