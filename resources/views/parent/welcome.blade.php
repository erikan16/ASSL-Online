@extends('main')

@section('title', '| Parent Dashboard')

@section('logoURL')
    {{ url("/") }}
@endsection

@include('_navigation')

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <h1><small>Parent</small> <br>Dashboard</h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes -->
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>Assignment</h3>
                        <p>Communication</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatbubbles"></i>
                    </div>
                    <a href="{{ url('parent/teacher_communication') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="small-box bg-orange">
                    <div class="inner">
                        <h3>Class Room</h3>
                        <p>Communication</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatbubbles"></i>
                    </div>
                    <a href="{{ url('parent/class_room') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>View</h3>
                        <p>Tutorials and References</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatbubbles"></i>
                    </div>
                    <a href="{{ url('parent/tutorial') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

    </section>


@endsection
