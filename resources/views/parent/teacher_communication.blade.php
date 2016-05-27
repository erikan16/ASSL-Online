@extends('main')

@section('title', '| Parent Dashboard')

@section('logoURL')
    {{ url("/") }}
@endsection

@include('_navigation')

@section('content')
    <section class="content-header">
        <h2>Assignments Communication</h2>

        <ol class="breadcrumb">
            <li><a href="{{ url('parent/welcome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Assignments</li>
        </ol>
    </section>
    <div class="container marketing">
        @foreach($assignments as $assignment)
            <div class="row featurette">
                <div class="col-md-7">
                    <h3 class="featurette-heading">{{ $assignment->subject }}</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h5>Book: {{ $assignment->book }}</h5>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5>Page# {{ $assignment->page }}</h5>
                        </div>
                    </div>
                    <h4>Directions: </h4>
                    <p> {{ substr($assignment->body, 0, 200) }}{{ strlen($assignment->body) > 200 ? "..." : " "}}</p>
                    <a href="{{ url('parent/communication/'.$assignment->slug) }}" class="btn btn-primary">Read More</a>
                </div>

            </div>
            <hr>
        @endforeach
    </div>
@endsection