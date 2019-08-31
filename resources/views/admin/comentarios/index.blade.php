@extends('layouts.principal')

@section('content')
<div class="content-wrapper">
    <section class="content">
       <div class="row"><h1 class="text-center">COMENTARIOS</h1></div>
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-3">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Publicacion</th>
                        <th>comentarios</th>
                        <th>fecha</th>
                        <th>usuario</th>
                        <th>correo</th>
                        <th class="text-center">Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($rol as $roles)
                        <tr>
                          <td>{{$roles->nombre_entrada}}</td>
                          <td>{{$roles->descripcion}}</td>
                          <td>{{$roles->created_at}}</td>
                          <td>{{$roles->nombre}}</td>
                          <td>{{$roles->correo}}</td>
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