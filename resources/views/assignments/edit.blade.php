@extends('main')

@section('title', '| View Post')

@section('logoURL')
    {{ url("teacher/welcome") }}
@endsection

@include('_navigation')

@section('content')
    <div class="row">
        {!! Form::model($assignment, ['route' => ['assignments.update', $assignment->assignment_id], 'method' => 'PUT']) !!}

        <div class="col-md-8">
            {{ Form::label('subject', 'Subject:') }}
            {{ Form::text('subject', null, array('class' => 'form-control input-large', 'required' => '', 'maxlength' => '255')) }}

            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('book', 'Book:') }}
                    {{ Form::text('book', null, array('class' => 'form-control input-large')) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('page', 'Page:') }}
                    {{ Form::text('page', null, array('class' => 'form-control input-large', 'required' => '', 'maxlength' => '255')) }}
                </div>
            </div>

            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created On:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($assignment->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Updated On:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($assignment->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('assignments.show', 'Cancel', array($assignment->assignment_id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection