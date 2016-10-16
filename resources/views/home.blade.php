@extends('layouts.app')

@section('links')
    <li class="">
        <a class="page-scroll" href="{{url('dashboard')}}">Dashboard</a>
        {{--This links the current admin to the dashboard to view visitors with current sessions on--}}
    </li>
@endsection
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
                            <div class="panel-title">Check for a Visitor!</div>
                        </div>

                        <div style="padding-top:30px" class="panel-body">

                            @if(session()->has('message'))
                                <div id="login-alert" class="alert alert-danger col-sm-12">
                                    {{session('message')[0]}}
                                </div>
                            @endif

                            <form id="loginform" class="form-horizontal" role="form" method="post"
                                  action="{{url('visitors/check')}}">
                                {{csrf_field()}}
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="login-username" type="text" class="form-control" name="emailPhone"
                                           placeholder="Email or Phone No." required>
                                </div>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 col-md-12 controls" style="text-align: center;">
                                        <input type="submit" style="width: 50%; align-self: center;" value="Proceed"
                                               id="btn-login" href="#" class="btn btn-success"/>


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
