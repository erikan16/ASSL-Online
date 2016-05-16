@extends('main')

@section('title', '| Assignments')

@section('logoURL')
    {{ url("teacher/welcome") }}
@endsection

@include('_navigation')

@section('content')
    <section class="content-header">
        <h1>All Assignments</h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Assignments</li>
        </ol>
        <div class="row">
            <div class="col-md-10">
            </div>
            <div class="col-md-2">
                <a href="{{ route('assignments.create') }}" class="btn btn-block btn-primary btn-h1-spacing">Create an Assignment</a></div>
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
                                    <th>Subject</th>
                                    <th>Body</th>
                                    <th>Created At</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($assignment as $assignment)
                                        <tr>
                                            <td> {{ $assignment->assignment_id }} </td>
                                            <td> {{ $assignment->subject }} </td>
                                            <td> {{ substr($assignment->body, 0, 50) }}{{ strlen($assignment->body) > 50 ? "..." : "" }} </td>
                                            <td> {{ date('M j, Y', strtotime($assignment->created_at)) }} </td>
                                            <td>
                                                <a href="{{ route('assignments.show', $assignment->assignment_id) }}" class="btn btn-default">View</a>
                                                <a href="{{ route('assignments.edit', $assignment->assignment_id) }}" class="btn btn-default">Edit</a>
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