@extends('login2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="{{ url('teacher/welcome') }}" class="btn btn-default">
                Teacher</a>
            <a href="{{ url('parent/welcome') }}" class="btn btn-default">
                Parent
            </a>
        </div>
    </div>
</div>
@endsection
