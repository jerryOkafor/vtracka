@extends('layouts.app')

@section('content')
    <section id="admin-index-page">
        <div class="container">
            <div class="clearfix"></div>
            <div class="row">
                <div id="loginbox" style="margin-top:50px;"
                     class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Create Account</div>
                        </div>

                        <div style="padding-top:30px" class="panel-body">
                            @if(isset($message))
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <strong>Warning!</strong>
                                    {{$message}}
                                </div>
                            @endif


                            <div class="panel-body">
                                <form id="registerform" class="form-horizontal" role="form" method="POST"
                                      enctype="multipart/form-data"
                                      action="{{ url('visitor/visit/signUp') }}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="firstname" class="col-md-4 control-label">First Name</label>

                                        <div class="col-md-6">
                                            <input id="firstname" type="text" class="form-control" name="first_name"
                                                   required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastname" class="col-md-4 control-label">Last Name</label>

                                        <div class="col-md-6">
                                            <input id="lastname" type="text" class="form-control" name="last_name"
                                                   required
                                                   autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gender" class="col-md-4 control-label">Gender</label>

                                        <div id="gender" class="col-md-6" required autofocus>
                                            <select name="gender" class="form-control">
                                                <option value="">Select Gender</option>
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="col-md-4 control-label">Phone Number</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="tel" class="form-control" name="phone" required
                                                   autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email"
                                                   value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="address" class="col-md-4 control-label">Address</label>

                                        <div class="col-md-6">
                                            <input id="address" type="text" class="form-control" name="address" required
                                                   autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="profession" class="col-md-4 control-label">Profession</label>

                                        <div class="col-md-6">
                                            <input id="profession" type="text" class="form-control" name="profession" required
                                                   autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="company" class="col-md-4 control-label">Company</label>

                                        <div class="col-md-6">
                                            <input id="company" type="text" class="form-control" name="company" required
                                                   autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-push-4">
                                            <img width="120px" height="120px" src="{{url('img/img_placeholder_avatar.jpg')}}" alt="Avatar"
                                                 class="img-circle img-responsive">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="avatar" class="col-md-4 control-label">Avatar</label>

                                        <div class="col-md-6">
                                            <input id="avatar" accept="image/jpeg,image/png" type="file"
                                                   class="form-control" name="avatar" required
                                                   autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" id="login_btn" class="btn btn-primary">
                                                Create Account
                                            </button>


                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
@endsection
