@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row-fluid">
                      <div class="widget-box">
                        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
                          <h5>CARTELERA</h5>
                          <div class="buttons"><a href="{{action('PeliculaController@create')}}" class="btn btn-mini btn-success"><i class="icon-refresh"></i>Agregar película</a></div>
                        </div>
                        <div class="widget-content">
                          <div class="row-fluid">

                           
                                @if ($peliculas->isEmpty())
                                    <h5>No hay películas que mostrar</h5>
                                @else
                                     <table class="table table-bordered">
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Horarios</th>
                                            <th>Mostrar desde</th>
                                            <th width="280px">Mostrar hasta</th>
                                            <th></th>
                                        </tr>
                                        @foreach ($peliculas as $pelicula)
                                        <tr>
                                            <td>{{ $pelicula->nombre}}</td>
                                            <td>{{ $pelicula->horario }}</td>
                                            <td>{{ $pelicula->fechaInicio}}</td>
                                            <td>{{ $pelicula->fechaTermino}}</td>
                                            <td>
                                                <a class="btn btn-info" href="">Ver</a>
                                                <a href="{{action('PeliculaController@edit', $pelicula->id )}}" class="btn btn-info">Modificar</a>
                                                <form action="{{action('PeliculaController@destroy', $pelicula->id )}}" method="post">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                @endif
    
                          </div>
                        </div>
                      </div>
                    </div>
                    

                            {!! $peliculas->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
