@extends('layouts.principal')

@section('content')
<div class="content-wrapper">
    <section class="content">

        <div class="row">
          {!! Form::model($rol,['route' => ['entradas.update',$rol->id],'method'=>'PUT']) !!}
        	<div class="col-md-8">
        		<input type="text" class="form-control" name="nombre" value="{{$rol->nombre_entrada}}" placeholder="Nombre de las entradas">
            <br>
            <textarea name="descripcion" id="image-tools">
            <?php echo  html_entity_decode($rol->descripcion);   ?> 
            </textarea>
            <br>
            <button class="btn btn-block btn-primary">Guardar</button>
        	</div>
          {!! Form::close() !!}  
          <div class="col-md-4">
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">Categorias</a></li>
            <li><a href="#">Mis cuentos <b>(15)</b></a></li>
          </ul>
          </div>	
        </div>
        
    </section>
</div>
@endsection
@section('script')

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript"> 
    tinymce.init({
      selector: 'textarea#image-tools',
      height: 450,
      plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table paste imagetools wordcount"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tiny.cloud/css/codepen.min.css'
      ]
    });
</script>
@endsection