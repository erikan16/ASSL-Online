@extends('main')

@section('title', '| Parent Dashboard')

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
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>Students</h3>
                    <!--<p>Grading and Editing</p>-->
                    <p>Set Up</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users "></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>Parent</h3>
                    <p>Communication</p>
                </div>
                <div class="icon">
                    <i class="ion ion-chatbubbles"></i>
                </div>
                <a href="{{ url('posts/') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>School News</h3>
                    <p>New and Upcoming Events</p>
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
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
    </div>

    <div class="row">
        <section class="content-header">
            <h1><small>Upload</small> <br>Tutorials and References</h1>
        </section>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="#" class="btn btn-app"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="#" class="btn btn-app"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="#" class="btn btn-app"><i class="fa fa-external-link" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="#" class="btn btn-app"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
