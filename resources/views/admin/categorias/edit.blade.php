@extends('layouts.principal')
@section('content')
  <div class="content-wrapper">
    <section class="content">
        	<div class="row">
        		<div class="col-md-4">
        			{!! Form::model($rol,['route' => ['categorias.update',$rol->id],'method'=>'PUT']) !!}
        				<div class="form-group">
        					<label>Nombre de categorias</label>
					    	{!!Form::text('nombre',null,['class'=>'form-control'])!!}
        				</div>
        				<div class="form-group">
        					<button class="btn btn-sucess btn-block">Actualizar</button>
        				</div>		
					{!! Form::close() !!}
        		</div>
        </div>
    </section>
</div>
@endsection