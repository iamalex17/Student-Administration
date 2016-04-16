@extends('layouts.nav')

@section('content')
<div class="container well">
    <form class="form-horizontal" action="{{ url('/register') }}" method="post">
        {!! csrf_field() !!}
        <fieldset>
            <legend>Register</legend>
            <div class="form-group"><label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Confirm Password</label>
                <div class="col-lg-10">
                    <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                </div>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
@endsection
