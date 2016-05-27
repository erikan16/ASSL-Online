@extends('main')

@section('title', "| $assignment->title")

@section('logoURL')
    {{ url("/") }}
@endsection

@include('_navigation')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <h1>{{ $assignment->title }}</h1>
        <p>{{ $assignment->body }}</p>
        <div class="row" align="right">
            <a href="{{ url('parent/teacher_communication') }}" class="btn btn-info btn-block"> <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Back to List</a>
        </div>
    </div>

@endsection
