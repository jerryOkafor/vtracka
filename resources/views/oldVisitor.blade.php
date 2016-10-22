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


                                        {{-- If the visitor is a male and has no avartar, use avatar 1, else use avatar 2--}}
                                        {{--{{$visitor->avatar_url == 1 ? "<img src="{{url($visitor->avatar_url)}}" --}}
                                        {{--alt="Avatar" class="img-circle img-responsive">" : "<img src="{{url($visitor->--}}
                                        {{--avatar_url)}}" alt="Avatar" class="img-circle img-responsive">")}}" alt="Avatar"--}}
                                        {{--class="img-circle img-responsive">}}--}}


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
                                            <option value="Roof Top">Roof Top</option>
                                            
                                        </select>
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
