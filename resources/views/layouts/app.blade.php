<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="This is a Visitors tracking system built by ccHub">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VTracker | How often do you visit</title>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="author" href="humans.txt">
</head>
<body>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">VTracka</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @yield('links')
                <!-- All the other Links shall be entered here dpeneding on the page  -->
                <li class="">
                    <a class="page-scroll" href="{{url('about')}}">About</a>
                </li>
                <li>

                    {{--I will check for login status and then show login/logout button--}}
                    @if(Auth::user())
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
        </div>
        <!--Bread Crumb goes here-->
    </div>
    <!-- /.container-fluid -->

</nav>
<div class="main">
    @yield('content')
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-4" style="text-align: center;">
                <p style="text-align: center;">© 2016 ccHub. All Rights Reserved.</p>
            </div>

        </div>


    </div>
</footer>


<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>