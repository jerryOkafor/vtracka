@extends('layouts.admin')
@section('content')
        <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard

        </h1>
    </div>
</div>
<!-- /.row -->

<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-info-circle"></i> <strong>vTracka</strong>
            Admin Alert
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-calendar-o fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>Visitors Today!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-calendar fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">200</div>
                        <div>Visitors This Week.!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-calendar fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">1240</div>
                        <div>Visitors This Month!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-calendar fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">1300</div>
                        <div>Visitors This Year!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-fw fa-map-marker"></i> Todays Visits:</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Whom to see</th>
                            <th>Purpose</th>
                            <th>Floor</th>
                            <th>Time In</th>
                            <th>Signed in by</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        @foreach($todayvisits as $todayvisit)
                        <tbody>
                        <tr>
                            <td>{{$todayvisit->id}}</td>
                            <td>{{$todayvisit->date}}</td>
                            <td>{{$todayvisit->first_name}} {{$todayvisit->last_name}}</td>
                            <td>{{$todayvisit->phone}}</td>
                            <td>{{$todayvisit->email}}</td>
                            <td>{{$todayvisit->whom_to_see}}</td>
                            <td>{{$todayvisit->p_Of_visit}}</td>
                            <td>{{$todayvisit->floor}}</td>
                            <td>{{$todayvisit->time_in}}</td>
                            <td>{{Auth::user()->name}}</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-gears"></i> More<b class="caret"></b></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#"><i class="fa fa-fw fa-sign-out"></i> Sign Out</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-fw fa-eye"></i> View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

@endsection