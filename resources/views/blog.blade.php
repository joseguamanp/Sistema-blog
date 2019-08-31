<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mi Blog</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <style type="text/css">
    	.miavatar{
    		cursor: pointer;
    	}
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
	      <a class="navbar-brand" href="{{url('')}}">BlogIn</a>
	    </div>
	    @guest
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="registrar.php"><span class="glyphicon glyphicon-user"></span>Registrar</a></li>
	      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
	<!-------->
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="{{url('')}}/imagen/blog2.jpg" alt="Los Angeles">
			    </div>

			    <div class="item">
			      <img src="{{url('')}}/imagen/blog2.jpg" alt="Chicago">
			    </div>

			    <div class="item">
			      <img src="{{url('')}}/imagen/blog2.jpg" alt="New York">
			    </div>
			  </div>
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div><br>
		<!----fin de carrusel  --->
		<div class="row">
			<div class="col-md-9">
                    <article>
                    @foreach($data as $d)
                   
                    	<?php echo  html_entity_decode($d->descripcion);   ?> 
                    </article>
                    <div>
					<h2>Responder</h2>
					</div>
					<button style="position: absolute;margin-top: 115px;" class="card-link btn btn-info" data-toggle="modal" data-target="#avatar">Crear</button>
					{!! Form::open(['url' => 'comentarios', 'method' => 'POST']) !!}
					<div>
						<input type="hidden" name="id_entradas" value="{{$d->id}}">
						<textarea name="descripcion" placeholder="Introduce aqui tu comentario..." class="form-control" rows="4" cols="30"></textarea>
					</div> <br>
					<div class="col-sm-2">		
						<img style="position: absolute;top: 69px;"  name="avatar" id="img_insert">
					</div>
					<div class="col-sm-10">
						<div class="form-group">
						<input placeholder="correo electronico(necesario)" type="text" class="form-control" name="correo">
						</div>
						<div class="form-group">
							<input placeholder="nombre" type="text" class="form-control" name="nombre">
						</div>
						<div class="form-group">
							<input placeholder="web" type="text" class="form-control" name="web">
						</div>
						<div>
							<button class="btn btn-lg">
								Publicar Comentario
							</button>
						</div>
					</div>
					{!! Form::close() !!} 
					
						<div>
							<h2>Comentarios</h2>
							@foreach($comen as $c)
								@if($c->id_entradas == $d->id)
								<article>{{$c->descripcion}}</article> <p class="text-info">{{$c->nombre}}</p> <br>
								@endif
							@endforeach
						</div>
					
				@endforeach
			</div>
			<div class="col-md-3">
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
				  <li><a href="#">Etiqueta numero 3</a></li>
				  <li><a href="#">Etiqueta numero 4</a></li>
				</ul>
			</div>
		</div>
		<div id="avatar" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h1 id="name" class="text-justify" class="modal-title">Seleccionar Avatar</h1>
		      </div>
		      <div class="modal-body">
		        <table>
		        	<tr>
		        	  <td><img onclick="enviar('{{url('')}}/imagen/avatar/batman.png');" class="miavatar" src="{{url('')}}/imagen/avatar/batman.png"></td>
		        	  <td><img onclick="enviar('{{url('')}}/imagen/avatar/harry.png');"  class="miavatar" src="{{url('')}}/imagen/avatar/harry.png"></td>
		        	  <td><img onclick="enviar('{{url('')}}/imagen/avatar/jeison.png');" class="miavatar" src="{{url('')}}/imagen/avatar/jeison.png"></td>
		        	  <td><img onclick="enviar('{{url('')}}/imagen/avatar/iroman.png');" class="miavatar" src="{{url('')}}/imagen/avatar/iroman.png"></td>
		        	</tr>
		        </table>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	
	<!-------->
</body>
<script type="text/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/js/modal.js')}}"></script>

<script type="text/javascript">
	function enviar(btn) {
		console.log(btn);
		$("#img_insert").attr("src",btn);
	}
</script>
</html>