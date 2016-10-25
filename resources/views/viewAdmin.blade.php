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

<div class="clearfix">

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-fw fa-eye"></i> View Admin</h3>
                    </div>
                         <div class="panel-body">
                             @foreach($admins as $admin)
                                 <div class="col-lg-6">
                                 <div class="panel panel-default">
                                     <div class="panel-body">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{url('img/img_placeholder_avatar.jpg')}}" alt="Avatar"
                                                     class="img-circle img-responsive"><hr>
                                            </div>


                                            <div class="col-md-8">

                                                    <p><b>Name:</b> {{$admin->name}}</p>
                                                    <p><b>Email:</b> {{$admin->email}}</p>
                                                    <p><b>Address:</b> {{$admin->address}}</p>
                                                    <p><b>Phone:</b> {{$admin->phone}}</p>

                                            </div>
                                        </div>
                                     </div>
                                 </div>
                                 </div>
                             @endforeach
                             </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
