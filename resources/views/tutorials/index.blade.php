@extends('main')

@section('title', '| Links')

@section('logoURL')
    {{ url("teacher/welcome") }}
@endsection

@include('_navigation')

@section('content')
    <section class="content-header">
        <h1>All Tutorial Links</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('teacher/welcome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Posts</li>
        </ol>
        <div class="row">
            <div class="col-md-10">
            </div>
            <div class="col-md-2">
                <a href="{{ route('tutorials.create') }}" class="btn btn-block btn-primary btn-h1-spacing">Add a New Tutorial Link</a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="dataTables_wrapper">
                            <table class="table">
                                <thead>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>URL</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($links as $link)
                                        <tr>
                                            <td> {{ $link->id }} </td>
                                            <td> {{ $link->title }} </td>
                                            <td> {{ $link->links }} </td>
                                            <td>
                                                <a href="{{ route('tutorials.show', $link->id) }}" class="btn btn-default">View</a>
                                                <a href="{{ route('tutorials.edit', $link->id) }}" class="btn btn-default">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection