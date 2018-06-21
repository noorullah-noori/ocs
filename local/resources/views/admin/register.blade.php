@include('admin.include.header')

<style>
    .head {
        font-size:16px;
        font-weight: bold;

    }
</style>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">

                        @if(Session::has('user_exists'))
                            <div class="ui error message">
                              <div class="head">
                                {{Session::get('user_exists')}}
                              </div>
                              <ul class="list">
                                <li>Login as {{Session::get('email_exists')}}!</li>
                                <li>Choose another Email!</li>
                              </ul>
                            </div>
                        @elseif(Session::has('bad_match'))
                            <div class="ui error message">
                              <div class="head">
                                {{Session::get('bad_match')}}
                              </div>
                              <ul class="list">
                                <li>Re-enter Your Credintials!</li>
                              </ul>
                            </div>
                        @endif

                        <header class="panel-heading">
                           Register User
                        </header>
                            <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Name</label>

                            <div class="col-md-5">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 control-label">E-Mail Address</label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-2 control-label">Password</label>

                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-2 control-label">Confirm Password</label>

                            <div class="col-md-5">
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="password-confirm" class="col-md-2 control-label">Role</label>

                            <div class="col-md-5">
                             <select name="role" class="form-control">
                                    <option value="editor">Editor</option>
                                    <option value="author">author</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                          </div>

                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <a href="{{url()->previous()}}" class="btn btn-default"  type="button">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
                    </section>
        </div>

</section>

@include('admin.include.footer')
