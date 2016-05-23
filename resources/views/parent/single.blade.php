@extends('main')

@section('title', "| $post->title")

@section('logoURL')
{{ url("/") }}
@endsection

@include('_navigation')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <div class="row" align="right">
            <a href="{{ url('parent/class_room') }}" class="btn btn-info btn-block"> <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Back to List</a>
        </div>
    </div>

@endsection
