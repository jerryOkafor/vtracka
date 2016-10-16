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
                <div id="loginbox" style="margin-top:50px;"
                     class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Welcome back
                                <b>{{$visitor->first_name." ".$visitor->last_name}}</b>
                            </div>

                        </div>

                        <div style="padding-top:30px" class="panel-body">

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">

                            </div>

                            <form id="loginform" class="form-horizontal" role="form" method="POST"                                 
                                  action="{{ url('visitor/visit/new') }}">
                                {{csrf_field()}}
                                <input type="hidden" value="{{$visitor->id}}" name="visitor_id">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{url($visitor->avatar_url)}}" alt="Avatar" class="img-circle img-responsive">

                                    </div>
                                    <div class="col-md-8">
                                        <p>Name: {{$visitor->first_name." ".$visitor->last_name}}</p>
                                        <p>Gender: {{$visitor->gender == 1 ? "Male" : "Female"}}</p>
                                        <p>Phone: {{$visitor->phone}}</p>
                                        <p>Email: {{$visitor->email}}</p>
                                        <p>Address: {{$visitor->address}}</p>
                                        <p>Title: {{$visitor->title}}</p>
                                        <p>Company: {{$visitor->company}}</p>
                                    </div>
                                </div>
                                <hr class="match_ends old_user_rule">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="" class="col-md-4 control-label">Purpose of Visit</label>

                                    <div class="col-md-6">
                                        <textarea id="pOfVisit" class="form-control" name="p_of_visit" required
                                                  autofocus>
                                            </textarea>

                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="whomToSee" class="col-md-4 control-label">Whom to See</label>

                                    <div class="col-md-6">
                                        <input id="whomToSee" type="text" class="form-control" name="whom_to_see"
                                               required>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" id="login_btn" class="btn btn-primary">
                                            Sign In
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
