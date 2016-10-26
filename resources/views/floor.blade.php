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
                    <h3 class="panel-title"><i class="fa fa-fw fa-plug"></i>  Add Floor </h3>
                </div>
                <div class="panel-body">

                    <div class="col-md-12">

                        <div>
                            <form method="POST" action="{{url('submit/floor')}}" class="form-group">
                                <div style="padding-bottom: 30px;">
                                        <div style="margin-bottom: 20px; color: #141414;">
                                            <h4>Floors added:</h4>
                                        </div>

                                        @foreach($addedFloors as $addedFloor)
                                           <span style="background-color: #99cb84; padding: 10px;"> {{ $addedFloor->name }}</span>
                                        @endforeach
                                </div>


                                <div class="row">
                                    <div class="form-group-lg">
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="1st Floor" required />
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" name="tag" class="form-control" placeholder="Organization's Name" required />
                                        </div>
                                    </div>
                                </div>

                                {{csrf_field()}}

                                <div class="row">
                                    <div class="form-group-lg" style="padding: 30px">
                                    <button type="submit"  class="btn btn-primary pull-right"  style="height: 50px; width: 200px;">Add Floor</button>
                                    </div>
                                </div>

                            </form>
                        </div>
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
