@extends('layouts.app')

        <!-- Main Content -->
@section('content')
    <section id="admin-index-page" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="clearfix"></div>
            <div class="row">

                <div class="row">
                    <div id="loginbox" style="margin-top:50px;"
                         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">Reset Password</div>
                            </div>

                            <div style="padding-top:30px" class="panel-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>

                                @endif

                            </div>
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ url('/password/email') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary full-width">
                                            Send Password Reset Link
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
