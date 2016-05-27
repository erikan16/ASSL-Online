@extends('login2')

@section('container')
    <div class="login-box-body">
        <p class="login-box-msg">Reset Password</p>
        <form role="form" method="POST" action="{{ url('/password/reset') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{ $email or old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" placeholder="Password" class="form-control" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation">
                <span class="glyphicon glyphicon-lock form-control-feedback">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group" align="center">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-refresh"></i> Reset Password
                </button>
            </div>
        </form>
    </div>
@endsection
