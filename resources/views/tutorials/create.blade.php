@extends('main')

@section('title', '| Add New Tutorial')

@section('logoURL')
    {{ url("teacher/welcome") }}
@endsection

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@include('_navigation')

@section('content')

    <section class="content-header">
        <h1>Post a New Tutorial</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('teacher/welcome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/tutorial') }}">Posts</a></li>
            <li class="active"> Post a New Tutorial</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(array('route' => 'tutorials.store', 'data-parsley-validate' => '')) !!}
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                    {{ Form::label('slug', 'Slug:') }}
                    {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

                    {{ Form::label('links', 'Url Link:') }}
                    {{ Form::text('links', null, array('class' => 'form-control', 'required' => '')) }}

                    {{ Form::submit('Post Link', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top: 20px;')) }}
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection