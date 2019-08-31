@extends('layouts.principal')
@section('content')
  <div class="content-wrapper">
    <section class="content">
      <div class="row"><h1 class="text-center">CATEGORIAS</h1></div>
      <div class="row">
        <div class="col-md-3">
            <button class="card-link btn btn-info" data-toggle="modal" data-target="#rol">Crear <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
        </div>
      </div>  <br>
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-3">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nombre de categorias</th>
                        <th>Creado</th>
                        <th>Modificado</th>
                        <th class="text-center">Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($rol as $roles)
                        <tr>
                          <td>{{$roles->nombre}}</td>
                          <td>{{$roles->created_at}}</td>
                          <td>{{$roles->updated_at}}</td>
                          <td style="display: inline-block;">
                            @if($roles->deleted_at!='')
                              <input type="submit" class="btn btn-default btn-sm" disabled="true" value="Editar">
                            @else
                              {!!link_to_route('categorias.edit', $title = 'Editar', $parameters = $roles->id, $attributes = ['class'=>'btn btn-warning btn-sm']);!!}
                            @endif
                            @if($roles->deleted_at!='')
                              <a id="restaurar" class="btn btn-primary btn-sm" href="{{url('')}}/categorias/{{$roles->id}}/restaurar"><i class="fa fa-retweet" aria-hidden="true"></i>
                              </a>
                            @else
                              {!! Form::open(['route' => ['categorias.destroy',$roles->id],'method'=>'DELETE','style'=>'display: contents']) !!}
                                {!!Form::button('<i class="fa fa-trash"></i>',['type' => 'submit','class'=>'btn btn-danger btn-sm'])!!}
                              {!! Form::close() !!}
                            @endif
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>  <!--fin del card-3 -->
          </div>
        </div>
      </section>
    </div>

<div id="rol" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="name" class="modal-title">Crear Categorias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['url' => 'categorias', 'method' => 'POST']) !!}
          <div class="form-group">
            <label>Nombre de la categorias:</label>
            <input class="form-control" type="text" name="etiqueta" required="yes">
          </div>
          <div class="form-group">
            <button class="btn btn-success btn-block">Aceptar
            </button>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
  @endsection
