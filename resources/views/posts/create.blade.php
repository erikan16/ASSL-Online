@extends('main')

@section('title', '| Create New Post')

@section('logoURL')
    {{ url("teacher/welcome") }}
@endsection

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@include('_navigation')

@section('content')

    <section class="content-header">
        <h1>Create New Post</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('teacher/welcome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/posts') }}">Posts</a></li>
            <li class="active"> Create New Post</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                    {{ Form::label('slug', 'Slug:') }}
                    {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

                    {{ Form::label('body', 'Post Body:') }}
                    {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

                    {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top: 20px;')) }}
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection