@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Nueva película</h5>
          </div>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
          <div class="widget-content nopadding">
            {!! Form::open(['url' => 'pelicula', 'files' => true]) !!}
            
            <form method="post" action="{{url('pelicula') }}" class="form-horizontal">
                {{csrf_field()}}
                
              <div class="control-group">
                <label class="control-label">Nombre :</label>
                <div class="controls">
                  <input type="text" class="span11" name="nombre" placeholder="Nombre de la pelicula">
                </div>
              </div>
            
              <div class="control-group">
                {{ Form::label('imagenURL','Thumbnail :',['class'=>'control-label'])}}
                <div class="controls">
                  {{ Form::file('imagenURL') }}
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Horarios :</label>
                <div class="controls">
                  <input type="text" class="span11" name="horario" placeholder="Horarios">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Idiomas :</label>
                <div class="controls">
                  <input type="text" class="span11" name="idioma" placeholder="Agrega un idioma">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Actores :</label>
                <div class="controls">
                  <input type="text" class="span11"  name="actores" placeholder="Agrega un actor">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Director :</label>
                <div class="controls">
                  <input type="text" class="span11" name="directores" placeholder="Imagen para mostrar">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Trailer URL :</label>
                <div class="controls">
                  <input type="text" class="span11" name="trailerURL" placeholder="Agrega una url de video">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Duración :</label>
                <div class="controls">
                  <input type="text" class="span11" name="duracion" placeholder="Duracion en minutos">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Sinopsis :</label>
                <div class="controls">
                  <input type="text" class="span11" name="descripcion" placeholder="Sinopsis">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Clasificación :</label>
                <div class="controls">
                  <input type="text" class="span11" name="clasificacion" placeholder="Clasificación">
                </div>
              </div>
              
              <hr>
              <div class="control-group">
                <label class="control-label">Mostrar desde :</label>
                <div class="controls">
                  <input type="text" class="span11" name="fechaInicio" placeholder="Fecha inicio">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Hasta :</label>
                <div class="controls">
                  <input type="text" class="span11" name="fechaTermino" placeholder="Fecha termino">
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-success">Guardar</button>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
