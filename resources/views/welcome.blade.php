<!DOCTYPE html>
<html lang="en">
<head>
    <title>Principal</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">        
    <style type="text/css">
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
            background-color: black;
        }
        .navbar{
            margin-bottom: 0px;
            border-radius: 0px;
        }
        .contenido{
            width: 100%;
            height: 592px;
            background-color: #016087;
        }
        .contenido2{
            width: 100%;
            height: 100%;
            background-color: white;
        }
        .navbar-inverse {
            background-color: #016087;
            border-color: #016087;
        }
        .jumbotron{
            display: inline-block;
        }
        #pin1{
            background-color: #016087;
            margin-left: 100px;
            display: inline-flex;
        }
        #pin2{
            background-color: black;
            margin-left: 100px;
        }
        .separar{
            width: 50%;
            padding-top: 71px;
            display: inline-block;
        }
        .separar2{
            width: 50%;
            display: inline-block;
        }
        img{
            width: 100%;
            border-radius: 5%;
            padding-right: 1%;
        }   
        .tablep{
            border:10px double #016087;             
        }
        hr {
            color: black;
            background-color: black;
            height: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{url('')}}">BlockgIN</a>
        </div>
        @guest
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{url('register')}}"><span class="glyphicon glyphicon-user"></span>Registrar</a></li>
          <li><a href="{{url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        @else
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{url('home')}}"><span class="glyphicon glyphicon-user"></span>home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="{{url('blog')}}">Mi Blog</a></li>
        </ul>
        @endguest
      </div>
    </nav>
    <div class="contenido">
        <div id="pin1" class="jumbotron">
            <div class="separar">
                <h1  class="display-4" style="color: white;">¿Deseas compartir ideales?<br>Crea tu propio espacio en BlockgIN.</h1>
                <p style="color: #ffffff7a;">Da a conocer tus pensamientos con libertad, sin importar el tema.</p>
                <p class="lead">
                    <a class="btn btn-success btn-lg" style="color: white;" href="#" role="button">Crea!</a>
                </p>
            </div>
            <div class="separar2">
                <img src="imagen/blog.jpg">
            </div>
        </div>
    </div>  
    <div class="contenido2">
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Publicaciones</a>
        </div>
    </div>
    </nav>          
    <div class="container">
        <div class="row">
                <div class="col-md-9">
                    @foreach($data as $d)
                    <article>
                    <?php echo  html_entity_decode($d->descripcion);   ?> 
                    </article>
                    @endforeach
                </div>                      
                <div class="col-md-3">
                <br>
                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="#">Entradas</a></li>
                  <li><a href="#">Mis cuentos <b>(15)</b></a></li>
                  <li><a href="#">Friends <b>(1)</b></a></li>
                  <li><a href="#">Games of thrones <b>(5)</b></a></li>
                  <li><a href="#">Entrada numero <b>(10)</b></a></li>
                </ul> <br>
                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="#">Categoria</a></li>
                  <li><a href="#">Comida</a></li>
                  <li><a href="#">Restaurante</a></li>
                  <li><a href="#">Reseñas</a></li>
                  <li><a href="#">Libros</a></li>
                </ul>
                </div>                      
        </div>  
    </div>
    <br>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></span>Siguenos en: </a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="http://www.facebook.com/"><span class="glyphicon glyphicon-user"></span>Facebook</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="http://twitter.com/"><span class="glyphicon glyphicon-user"></span>Twitter</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="http://youtube.com/"><span class="glyphicon glyphicon-user"></span>Youtube</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="http://www.linkedin.com/"><span class="glyphicon glyphicon-user"></span>LinkedIn</a></li>
        </ul>               
      </div>
    </nav>
    </div>
</body>
</html>