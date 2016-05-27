@extends('main')

@section('title', '| Tutorials')

@section('logoURL')
    {{ url("teacher/welcome") }}
@endsection

@include('_navigation')

@section('content')
    <form action="add" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="file">
        <input type="submit">
    </form>
@endsection