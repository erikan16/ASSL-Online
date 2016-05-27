@extends('main')

@section('title', '| View Post')

@section('logoURL')
    {{ url("teacher/welcome") }}
@endsection

@include('_navigation')

@section('content')
    <div class="col-md-8 col-md-offset-1">
        <div class="row">
            <div class="col-md-7">
                <h1>{{ $assignment->subject }}</h1>
                <div class="row">
                    <div class="col-sm-6 lead">
                        Book: {{ $assignment->book }} <br>
                        Page: {{ $assignment->page }}
                    </div>
                </div>
                {{ $assignment->body }}
            </div>
            <div class="col-md-5">
                <div class="well">
                    <dl>
                        <dt>Created On:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($assignment->created_at)) }}</dd>
                    </dl>
                    <dl>
                        <dt>Updated On:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($assignment->updated_at)) }}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('assignments.edit', 'Edit', array($assignment->assignment_id), array('class' => 'btn btn-primary btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['assignments.destroy', $assignment->assignment_id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {!! Html::linkRoute('assignments.index', 'All Assignments', [], ['class' => 'btn btn-info btn-block btn-h1-spacing']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection