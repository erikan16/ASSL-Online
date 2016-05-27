@extends('main')

@section('title', '| Parent Dashboard')

@section('logoURL')
    {{ url("/parent/welcome") }}
@endsection

@include('_navigation')

@section('content')
    <section class="content-header">
        <h2>Tutorials</h2>

        <ol class="breadcrumb">
            <li><a href="{{ url('parent/welcome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Tutorials</li>
        </ol>
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
                                @foreach($tutorials as $tutorial)
                                    <tr>
                                        <td> {{ $tutorial->id }} </td>
                                        <td> {{ $tutorial->title }} </td>
                                        <td> {{ $tutorial->links }} </td>
                                        <td>
                                            <a href="{{ url($tutorial->links) }}" target="blank" class="btn btn-default">View</a>
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