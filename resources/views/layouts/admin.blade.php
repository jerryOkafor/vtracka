<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>vTracka | How often do you visit</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('css/admin.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <link type="image/x-icon" rel="shortcut icon" href="{{asset('img/favicon.png')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" xmlns="http://www.w3.org/1999/html"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <style type="text/css">
        a:active{
            background-color: #000000;
        }
        .li{
            background-color: #ffffff;
        }
    </style
    <![endif]-->


</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="{{url('home')}}"
               style="font-size:25px; font-weight:600; color:#017cc2; font-family:cambria;">vTracka</a>

        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="fa fa-user">Welcome back, </i> {{Auth::user()->name}} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    <li>
                        @if(Auth::user())

                                <!-- This links the current admin to the dashboard to add other admins -->


                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        @endif
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="{{url('home')}}"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="{{url('/dashboard')}}"><i class="fa fa-fw fa-map-marker"></i> Today's Visits</a>
                </li>
                <li>
                    <a href="{{url('admin/view')}}"><i class="fa fa-fw fa-eye"></i> View Admin</a>
                </li>
                <li>
                    <a href="{{url('register')}}"><i class="fa fa-fw fa-plus-square-o"></i> Add Users</a>
                </li>
                <li>
                    <a href="{{url('user/view')}}"><i class="fa fa-fw fa-eye"></i> View Users</a>
                </li>

                <li>
                    <a href="{{url('visitor/history')}}"><i class="fa fa-fw fa-history"></i> Visitor's History</a>
                </li>
                <li>
                    <a href="{{url('visit/trend')}}"><i class="fa fa-fw fa-bar-chart"></i> Visit Trend</a>
                </li>
                <li>
                    <a href="{{url('floor/add')}}"><i class="fa fa-fw fa-plug"></i> Add Floor</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

          @yield('content')

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


</div>
<!-- /#wrapper -->

<div class="container-fluid" style="padding: 20px; margin-top: 10px; color: gray;">

    @include('include.footer')
</div>

<!-- jQuery -->
<script src="{{url('js/jquery-3.1.1.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{url('js/bootstrap.min.js')}}"></script>

</body>

</html>
