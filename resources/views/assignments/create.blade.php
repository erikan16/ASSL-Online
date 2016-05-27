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
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create New Assignment</h1>
                <hr>
                {!! Form::open(array('route' => 'assignments.store', 'data-parsley-validate' => '')) !!}
                    {{ Form::label('subject', 'Subject:') }}
                    {{ Form::text('subject', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                    <div class="row">
                        <div class="col-md-6">
                            {{ Form::label('book', 'Book:') }}
                            {{ Form::text('book', null, array('class' => 'form-control', 'required' => '')) }}
                        </div>
                        <div class="col-md-6">
                            {{ Form::label('page', 'Page #:') }}
                            {{ Form::text('page', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                        </div>
                    </div>
                    {{ Form::label('slug', 'Slug:') }}
                    {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

                {{ Form::label('body', 'Body:') }}
                    {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

                    {{ Form::submit('Create Assignment', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top: 20px;')) }}
                {!! Form::close() !!}
            </div>
        </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection