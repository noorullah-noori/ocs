@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Login</div>
                <div class="panel-body">
                              @if(Session::get('invalid_email')!='')
                              <ul class="alert alert-danger">
                                  <li>{{Session::get('invalid_email')}}</li>
                              </ul>
                              @endif
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('check_crediential') }}">


                        <div class="form-group{{ ($errors->has('email') OR Session::has('login_failed')) ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @elseif(Session::has('login_failed'))
                                    <span class="help-block">
                                        <strong>{{ Session::get('login_failed') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ ($errors->has('password') OR Session::has('login_failed')) ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('forgot') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
