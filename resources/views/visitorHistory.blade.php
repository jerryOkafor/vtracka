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


<div class="clearfix">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-fw fa-eye"></i> Visitors History</h3>
                </div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive" >
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Purpose of Visit</th>
                                    <th>Whom to See</th>
                                    <th>Floor</th>
                                    <th>Signed in by</th>
                                    <th>Time In</th>
                                    <th>Time Out</th>
                                    <th>Reg. Date/Time</th>

                                </tr>
                                </thead>

                                @foreach($visitHistories as $visitHistory)
                                    <tbody>
                                    <tr>
                                        <td>{{ $visitHistory->id }}</td>
                                        <td>{{ $visitHistory->date }}</td>
                                        <td>{{ $visitHistory->visitor->first_name }} {{ $visitHistory->visitor->last_name }}</td>
                                        <td>{{ $visitHistory->visitor->email }}</td>
                                        <td> {{ (($visitHistory->visitor->gender)==1)? 'Male' : 'Female'}}</td>
                                        <td>{{ $visitHistory->visitor->phone }}</td>
                                        <td>{{ $visitHistory->visitor->address }}</td>
                                        <td>{{ $visitHistory->p_of_visit }}</td>
                                        <td>{{ $visitHistory->whom_to_see }}</td>
                                        <td>{{ $visitHistory->floor}}</td>
                                        <td>{{ Auth::User()->name }}</td>
                                        <td>{{ $visitHistory->time_in }}</td>
                                        <td>{{ $visitHistory->time_out }}</td>
                                        <td>{{ $visitHistory->visitor->created_at }}</td>
                                    <tr>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
