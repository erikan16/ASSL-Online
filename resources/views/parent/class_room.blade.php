@extends('main')

@section('title', '| Parent Dashboard')

@section('logoURL')
    {{ url("/") }}
@endsection

@include('_navigation')

@section('content')
    <section class="content-header">
        <h2>Class Room Communication</h2>

        <ol class="breadcrumb">
            <li><a href="{{ url('parent/welcome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Class Room</li>
        </ol>
    </section>
    <div class="container marketing">
        @foreach($posts as $post)
            <div class="row featurette">
                <div class="col-md-7">
                    <h3 class="featurette-heading">{{ $post->title }}</h3>
                    <p> {{ substr($post->body, 0, 200) }}{{ strlen($post->body) > 200 ? "..." : " "}}</p>
                    <a href="{{ url('parent/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                </div>

            </div>
            <hr>
        @endforeach
    </div>
@endsection