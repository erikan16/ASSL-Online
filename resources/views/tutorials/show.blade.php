@extends('main')

@section('title', '| View Post')

@include('_navigation')

@section('content')
    <section class="content-header">
        <h1 style="padding-bottom: 25px;"></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('teacher/welcome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/tutorials') }}">Tutorials</a></li>
            <li class="active"> {{ $link->title }}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $link->title }}</h1>
                <p class="lead">{{ $link->slug }}</p>
                <p class="lead">{{ $link->links }}</p>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>URL:</label>
                        <a href="{{ url($link->links) }}" target="_blank">{{ url($link->links) }}</a>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('tutorials.edit', 'Edit', array($link->id), array('class' => 'btn btn-primary btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['posts.destroy', $link->id], 'method' => 'DELETE']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {!! Html::linkRoute('tutorials.index', 'All Tutorials', [], ['class' => 'btn btn-info btn-block btn-h1-spacing']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection