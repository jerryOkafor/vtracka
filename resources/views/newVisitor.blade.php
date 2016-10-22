@extends('layouts.app')

@section('content')
    <section id="admin-index-page">
        <div class="container">


            <div class="clearfix"></div>
            <div class="row">
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                        </div>

                      <!--   <div style="padding-top:30px" class="panel-body" >
                            @if(session()->has('message'))
                                <div id="login-alert" class="alert alert-danger col-sm-12">
                                    {{session('message')[0]}}
                                </div>
                            @endif
 -->

                        <div class="panel-body">
                            <form id="registerform" class="form-horizontal" role="form" method="POST" action="{{ url('visitor/visit/signUp') }}">

                                {{csrf_field()}}


                                <div class="form-group">
                                    <label for="firstname" class="col-md-4 control-label">First Name</label>

                                    <div class="col-md-6">
                                        <input id="firstname" type="text" class="form-control" name="first_name" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="lastname" class="col-md-4 control-label">Last Name</label>

                                    <div class="col-md-6">
                                        <input id="lastname" type="text" class="form-control" name="last_name" required autofocus>
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
                                        <input id="phone" type="text" class="form-control" name="phone" required autofocus>
                                    </div>
                                </div>

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

                                <div class="form-group">
                                    <label for="address" class="col-md-4 control-label">Address</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text" class="form-control" name="address" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title" class="col-md-4 control-label">Profession</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control" name="title" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="company" class="col-md-4 control-label">Company</label>

                                    <div class="col-md-6">
                                        <input id="comapny" type="text" class="form-control" name="company" required autofocus>
                                    </div>
                                </div>


                                 <div class="form-group">
                                    <label for="floor" class="col-md-4 control-label">Floor</label>

                                    <div id="floor" class="col-md-6" required autofocus>
                                        <select name="floor" class="form-control">
                                            <option value="">Select Floor</option>
                                            <option value="Ground Floor">Ground Floor</option>
                                            <option value="1st Floor">1st Floor</option>
                                            <option value="2nd Floor">2nd Floor</option>
                                            <option value="3rd Floor">3rd Floor</option>
                                            <option value="4th Floor">4th Floor</option>
                                            <option value="5th Floor">5th Floor</option>
                                            <option value="6th Floor">6th Floor</option>
                                            <option value="Roof Top Floor">Roof Top Floor</option>
                                            
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" id="login_btn" class="btn btn-primary">
                                            Create Account
                                        </button>


                                    </div>
                                </div>


                                <!--
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                       <p align="center">or</p>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" id="login_btn" class="btn btn-primary">
                                           Sign Up with Facebook
                                        </button>


                                    </div>
                                </div> -->
                            </div>

                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
