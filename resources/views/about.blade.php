@extends('layouts.app')

@section('content')

<section id="admin-index-page">
    <div class="container">
        
        <div class="clearfix"></div>
        <div class="row">
            <div id="loginbox" style="margin-top:60px;" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">About vTracka</div>
                    </div>

                    <div style="padding:50px" class="panel-body" align="justify">

                        <p>vTracka is a visitor management sysytem designed to help organizations keep track of people in their premises. It process the identification, authentication, registration, monitoring of visitors and notification of the hosts about their arrival.</p>

                        <p>It is a project carried out by Team 2 of CodeCamp 2016 organized by Co-Creation Hub, Yaba, Lagos State. It is designed to enable accurate and easier statistics of guests in your organization to be taken.</p>

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endSection


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>