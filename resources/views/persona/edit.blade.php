@extends('welcome')
@section('content')
<br>
<br>
<br>
<h2 class="display-5 text-center">Actulizar datos del registro</h2>
<br>
<form class="row g-3" action="{{route('persona.update',$persona)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-6">
        <label class="form-label" for="fecha_afiliacion">Fecha de Afiliación</label>
        <input type="date" class="form-control" name="fecha_afiliacion" id="fecha_afiliacion" value="{{$persona->fecha_afiliacion}}">
        @error('fecha_afiliacion')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="fecha_ingreso">Fecha de Ingreso a la UNAN-León</label>
        <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso" value="{{$persona->fecha_ingreso}}">
        @error('fecha_ingreso')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="fecha_actualizacion">Fecha de Actualización</label>
        <input type="date" class="form-control" name="fecha_actualizacion" id="fecha_actualizacion" value="{{$persona->fecha_actualizacion}}">
        @error('fecha_actualizacion')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="correo">E-mail</label>
        <input type="email" class="form-control" name="correo" id="correo" value="{{$persona->correo}}">
        @error('correo')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-12">
        <label class="form-label" for="nombre">Nombre Completo</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$persona->nombre}}">
        @error('nombre')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="cedula">Cédula</label>
        <input type="text" class="form-control" name="cedula" id="cedula" value="{{$persona->cedula}}">
        @error('cedula')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="inss">INSS</label>
        <input type="text" class="form-control" name="inss" id="inss" value="{{$persona->inss}}">
        @error('inss')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="input-group">
        <span class="input-group-text">Dirección</span>
        <textarea name="direccion" id="direccion" class="form-control">{{$persona->direccion}}</textarea>
        @error('direccion')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="telefono_casa">Telefono de casa</label>
        <input type="number" class="form-control" name="telefono_casa" id="telefono_casa" value="{{$persona->telefono_casa}}">
        @error('telefono_casa')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="telefono_tigo">Telefono Tigo</label>
        <input type="number" class="form-control" name="telefono_tigo" id="telefono_tigo" value="{{$persona->telefono_tigo}}">
        @error('telefono_tigo')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="telefono_claro">Telefono Claro</label>
        <input type="number" class="form-control" name="telefono_claro" id="telefono_claro" value="{{$persona->telefono_claro}}">
        @error('telefono_claro')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="telefono_trabajo">Telefono del trabajo</label>
        <input type="number" class="form-control" name="telefono_trabajo" id="telefono_trabajo" value="{{$persona->telefono_trabajo}}">
        @error('telefono_trabajo')
            <small>*{{$message}}</small>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="facultad" class="form-label">Seleccione facultad</label>
        @error('facultad')
            <small>*{{$message}}</small>
        @enderror
        <select name="facultad" id="facultad" class="form-select">
            <option selected value="{{$persona->facultad}}">{{$persona->facultad}}</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="departamento" class="form-label">Seleccione Departamento</label>
        @error('departamento')
            <small>*{{$message}}</small>
        @enderror
        <select name="departamento" id="departamento" class="form-select">
                <option selected value="{{$persona->departamento}}">{{$persona->departamento}}</option>
        </select>

    </div>
    <div class="row g-3">

    <div class="col-12">

        <div class="col-md-6">
            <label for="estado_civil" class="form-label">Estado Civil</label>
            <select class="form-select" aria-label="Default select example" id="estado_civil" name="estado_civil">
                <option selected value=""></option>
                <option value="soltero">Soltero</option>
                <option value="soltero">Casado</option>
                <option value="soltero">Acompañado</option>
            </select>
          </div>
    </div>
    <div class="col-md-6">
        <label for="nombre_conyugue" class="form-label">Nombre del Conyugue</label>
        <input type="text" class="form-control" id="nombre_conyugue" name="nombre_conyugue" value="{{$persona->familias->nombre_conyugue}}">
    </div>
    <div class="col-md-6">
        <h5 class="form-label">Fallecido</h5>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="c_fallecido" id="c_fallecido" value="1" >
            <label class="form-check-label" for="c_fallecido">Si</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="c_fallecido" id="c_fallecido" value="0">
            <label class="form-check-label" for="c_fallecido">No</label>
        </div>
    </div>
    <div class="col-md-6">
        <label for="padre" class="form-label">Nombre del Padre</label>
        <input type="text" class="form-control" id="padre" name="padre" value="{{$familia->padre}}" >
    </div>
    <div class="col-md-6">
        <h5 class="form-label">Fallecido</h5>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="p_fallecido" id="p_fallecido" value="1">
            <label class="form-check-label" for="p_fallecido">Si</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="p_fallecido" id="p_fallecido" value="0">
            <label class="form-check-label" for="p_fallecido">No</label>
        </div>
    </div>
    <div class="col-md-6">
        <label for="madre" class="form-label">Nombre de la Madre</label>
        <input type="text" class="form-control" id="madre" name="madre" value="{{$familia->madre}}">
    </div>
    <div class="col-md-6">
        <h5 class="form-label">Fallecida</h5>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="m_fallecida" id="m_fallecida" value="1">
            <label class="form-check-label" for="m_fallecida">Si</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="m_fallecida" id="m_fallecida" value="0">
            <label class="form-check-label" for="m_fallecida">No</label>
        </div>
    </div>
    <div class="col-md-6">
        <label for="hijo" class="form-label">Nombre del hijo</label>
        <input type="text" class="form-control" id="hijo" name="hijo" value="{{$familia->hijo}}">
    </div>
    <div class="col-md-3">
        <label for="edad_hijo" class="form-label">Edad</label>
        <input type="number" class="form-control" id="edad_hijo" name="edad_hijo" value="{{$familia->edad_hijo}}">
    </div>
    <div class="col-md-3">
        <label for="sexo_hijo" class="form-label">Sexo</label>
        <select class="form-select" aria-label="Default select example" id="sexo_hijo" name="sexo_hijo">
            <option selected value="{{$familia->sexo_hijo}}">{{$familia->sexo_hijo}}</option>
            <option value="femenino">Femenino</option>
            <option value="masculino">Másculino</option>
          </select>
    </div>

    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{url('/persona')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
<script src="{{url('/js/lista.js')}}"></script>
@endsection
