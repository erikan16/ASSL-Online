@extends('main')

@section('title', '| View Post')

@include('_navigation')

@section('content')
    <section class="content-header">
        <h1 style="padding-bottom: 25px;"></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('teacher/welcome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('tutorials.show', $link->id) }}">{{ $link->title }}</a></li>
            <li class="active"> Edit</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12 ">
                {!! Form::model($link, ['route' => ['tutorials.update', $link->id], 'method' => 'PUT']) !!}

                <div class="col-md-7">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, array('class' => 'form-control input-large', 'required' => '', 'maxlength' => '255')) }}

                    {{ Form::label('slug', 'Slug:') }}
                    {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

                    {{ Form::label('links', 'URL Links:') }}
                    {{ Form::textarea('links', null, array('class' => 'form-control', 'required' => '')) }}
                </div>
                <div class="col-md-5">
                    <div class="well">
                        <div class="row">
                            <div class="col-sm-6">
                                {!! Html::linkRoute('tutorials.show', 'Cancel', array($link->id), array('class' => 'btn btn-danger btn-block')) !!}
                            </div>
                            <div class="col-sm-6">
                                {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                            </div>
                        </div>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection