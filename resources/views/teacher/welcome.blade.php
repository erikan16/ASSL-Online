@extends('main')

@section('title', '| Teacher Dashboard')

@section('logoURL')
{{ url("/") }}
@endsection

@include('_navigation')

@section('content')
        <!-- Content Header -->
<section class="content-header">
    <h1><small>Teacher</small> <br>Dashboard</h1>

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes -->
    <div class="row">
        <div class="col-lg-4 col-xs-4">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>Add</h3>
                    <p>Class Room Communication</p>
                </div>
                <div class="icon">
                    <i class="ion ion-chatbubbles"></i>
                </div>
                <a href="{{ url('posts/') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-4">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>Add</h3>
                    <p>Daily Assignments</p>
                </div>
                <div class="icon">
                    <i class="ion ion-edit"></i>
                </div>
                <a href="{{ url('/assignments') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-4">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>Add</h3>
                    <p>Tutorials and References</p>
                </div>
                <div class="icon">
                    <i class="ion ion-edit"></i>
                </div>
                <a href="{{ url('/tutorials') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
