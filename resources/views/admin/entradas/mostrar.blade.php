@extends('layouts.principal')

@section('content')
<div class="content-wrapper">
    <section class="content">
       <div class="row"><h1 class="text-center">ENTRADAS</h1></div>
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-3">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nombre de la entrada</th>
                        <th>Creado</th>
                        <th>Modificado</th>
                        <th class="text-center">Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($rol as $roles)
                        <tr>
                          <td>{{$roles->nombre_entrada}}</td>
                          <td>{{$roles->created_at}}</td>
                          <td>{{$roles->updated_at}}</td>
                          <td style="display: inline-block;">
                            @if($roles->deleted_at!='')
                              <input type="submit" class="btn btn-default btn-sm" disabled="true" value="Editar">
                            @else
                              {!!link_to_route('entradas.edit', $title = 'Ver', $parameters = $roles->id, $attributes = ['class'=>'btn btn-info btn-sm']);!!}
                            @endif
                            @if($roles->deleted_at!='')
                            @else
                              {!! Form::open(['route' => ['entradas.destroy',$roles->id],'method'=>'DELETE','style'=>'display: contents']) !!}
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
@endsection