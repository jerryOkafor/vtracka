@extends('layouts.app')

@section('content')
    <section id="admin-index-page">
        <div class="container">

            <div class="row">
                <div class=" col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-2 col-xs-2 col-xs-offset-4">
                    <div class="wrapper">

                        <h2>Welcome</h2>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Sign In</div>
                            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="{{ url('/password/reset') }}">
                                    Forgot Your Password? </a></div>
                        </div>

                        <div style="padding-top:30px" class="panel-body" >

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">

                            </div>

                            <form id="loginform" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

                                {{csrf_field()}}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" id="login_btn" class="btn btn-primary">
                                            Login
                                        </button>


                                    </div>
                                </div>

                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
