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

    <div class="row">
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes -->
            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>Teacher</h3>
                            <p>Communication</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-chatbubbles"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>School</h3>
                            <p>News</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-university"></i>
                        </div>
                        <div class="regular-box-footer">
                            <section class="news">
                                <h4>This is Generic Info!</h4>
                                <h5>Posted on: 5/4/2016</h5>
                                <hr>
                                <p>Here we will put School News and other Generic Information</p>
                                <button class="btn btn-primary"> Read More</button>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-header">
            <h1><small>Upload</small> <br>Tutorials and References</h1>
        </section>
        <br>

        <section class="content">
            <div class="row">
                <div class="col-md-11 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="#" class="btn btn-app"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="#" class="btn btn-app"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="#" class="btn btn-app"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="#" class="btn btn-app"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
