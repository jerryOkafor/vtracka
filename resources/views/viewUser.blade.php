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
                    <h3 class="panel-title"><i class="fa fa-fw fa-eye"></i> View Users</h3>
                </div>
                <div class="panel-body">

                        <div class="col-md-12">


                            <div class="table-responsive" >
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>

                                    </tr>
                                    </thead>

                                    @foreach($users as $user)
                                    <tbody>
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->phone }}</td>

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
