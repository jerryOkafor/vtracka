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
                    <h3 class="panel-title"><i class="fa fa-fw fa-plug"></i>  Add Floor</h3>
                </div>
                <div class="panel-body">

                    <div class="col-md-12">

                                <div>
                                    <form method="POST" action="/submitFloor" class="form-group">

                                        <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" name="tag1" class="form-control" placeholder="Floor Name">
                                                         <input type="checkbox" value="1st Floor" class="form-control">

                                                </div>


                                                <div class="col-md-4">
                                                    <input type="text" name="tag1" class="form-control" placeholder="Floor Name">

                                                       <input type="checkbox" value="1st Floor" class="form-control">

                                                </div>

                                                <div class="col-md-4">
                                                    <input type="text" name="tag1" class="form-control" placeholder="Floor Name">

                                                    <input type="checkbox" value="1st Floor" class="form-control">

                                                </div>
                                        </div>

                                        <hr>



                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="tag1" class="form-control" placeholder="Floor Name">
                                                <input type="checkbox" value="1st Floor" class="form-control">

                                            </div>


                                            <div class="col-md-4">
                                                <input type="text" name="tag1" class="form-control" placeholder="Floor Name">

                                                <input type="checkbox" value="1st Floor" class="form-control">

                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" name="tag1" class="form-control" placeholder="Floor Name">

                                                <input type="checkbox" value="1st Floor" class="form-control">

                                            </div>
                                        </div>
                                        <hr>



                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="tag1" class="form-control" placeholder="Floor Name">
                                                <input type="checkbox" value="1st Floor" class="form-control">

                                            </div>


                                            <div class="col-md-4">
                                                <input type="text" name="tag1" class="form-control" placeholder="Floor Name">

                                                <input type="checkbox" value="1st Floor" class="form-control">

                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" name="tag1" class="form-control" placeholder="Floor Name">

                                                <input type="checkbox" value="1st Floor" class="form-control">

                                            </div>
                                        </div>
                                        <hr>



                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="tag1" class="form-control" placeholder="Floor Name">
                                                <input type="checkbox" value="1st Floor" class="form-control">

                                            </div>


                                            <div class="col-md-4">
                                                <input type="text" name="tag1" class="form-control" placeholder="Floor Name">

                                                <input type="checkbox" value="1st Floor" class="form-control">

                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" name="tag1" class="form-control" placeholder="Floor Name">

                                                <input type="checkbox" value="1st Floor" class="form-control">

                                            </div>
                                        </div>
                                        <hr>


                                        {{csrf_field()}}

                                            <div class="col-lg-10">
                                                <button type="submit"  class="btn btn-primary pull-right"  style="height: 50px; width: 200px">Add Floors</button>
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
