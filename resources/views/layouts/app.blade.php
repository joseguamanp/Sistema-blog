<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/css/misestilo/login.css')}}">
    <style>
        nav.{
            border-color: #016087;
            margin-bottom: 0px;
        }
        .navbar-inverse .navbar-nav>li>a{
            color: white;
        }
        .navbar-inverse .navbar-brand{
            color: white;
        }
        .container-fluid{
            background-color: #016087;
        }
        .navbar{
            margin-bottom: 0px;
            border-radius: 0px;
        }
        .navbar-inverse {
            background-color: #016087;
            border-color: #016087;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{url('/')}}">BlockgIN</a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="{{url('/blog')}}">Mi Blog</a></li>
        </ul>        
      </div>
    </nav>
   @yield('content')
</body>
<script type="text/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.js')"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/js/modal.js')"></script>
</html>