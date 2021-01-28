@extends('welcome')
@section('content')
<br>
<br>
<h1 class="display-5 text-center">SINDICATO DE PROFESIONALES DE LA EDUCACION SUPERIOR “IVAN MONTENEGRO BÁEZ” (SIPROES) UNIVERSIDAD NACIONAL AUTONOMA DE NICARAGUA, LEON</h1>
<br>
<h2 class="display-5 text-center">FICHA DE AFILIACÓN A LA MUTUAL DOCENTES</h2>
<br>
<form class="row g-3 needs-validation" action="{{route('persona.store')}}" method="POST">
    @csrf

    <div class="col-md-6">
        <label class="form-label" for="fecha_afiliacion">Fecha de Afiliación</label>
        <input type="date" class="form-control" name="fecha_afiliacion" id="fecha_afiliacion" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            Please choose a username.
          </div>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="fecha_ingreso">Fecha de Ingreso a la UNAN-León</label>
        <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso" required>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="fecha_actualizacion">Fecha de Actualización</label>
        <input type="date" class="form-control" name="fecha_actualizacion" id="fecha_actualizacion" required>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="correo">E-mail</label>
        <input type="email" class="form-control" name="correo" id="correo" required>
        </div>
    <div class="col-12">
        <label class="form-label" for="nombre">Nombre Completo</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="cedula">Cédula</label>
        <input type="text" class="form-control" name="cedula" id="cedula" required>
        </div>
    <div class="col-md-6">
        <label class="form-label" for="inss">INSS</label>
        <input type="text" class="form-control" name="inss" id="inss" required>
        </div>
    <div class="input-group">
        <span class="input-group-text">Dirección</span>
        <textarea name="direccion" id="direccion" class="form-control" required></textarea>
        </div>
    <div class="col-md-6">
        <label class="form-label" for="telefono_casa">Telefono de casa</label>
        <input type="number" class="form-control" name="telefono_casa" id="telefono_casa">

    </div>
    <div class="col-md-6">
        <label class="form-label" for="telefono_tigo">Telefono Tigo</label>
        <input type="number" class="form-control" name="telefono_tigo" id="telefono_tigo">
    </div>
    <div class="col-md-6">
        <label class="form-label" for="telefono_claro">Telefono Claro</label>
        <input type="number" class="form-control" name="telefono_claro" id="telefono_claro">
    </div>
    <div class="col-md-6">
        <label class="form-label" for="telefono_trabajo">Telefono del trabajo</label>
        <input type="number" class="form-control" name="telefono_trabajo" id="telefono_trabajo">
    </div>
    <div class="col-md-6">
        <label for="facultad" class="form-label">Seleccione facultad</label>
        <select name="facultad" id="facultad" class="form-select" required>
            <option>Escoja la facultad a la que pertenece</option>

        </select>
    </div>
    <div class="col-md-6">
        <label for="departamento" class="form-label">Seleccione Departamento</label>
        <select name="departamento" id="departamento" class="form-select" required>
            <option>Seleccione el departamento</option>
        </select>
    </div>
    <div class="row g-3">
        @include('familia.create')
    </div>
    <div class="row g-3">
        @include('beneficiario.create')
    </div>
    <div class="row g-3">
        @include('anexo.create')
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/persona')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
<script src="{{url('/js/lista.js')}}"></script>
<script>
    $(function() {
    $("#estado_civil").change( function() {
    if ($(this).val() === "soltero") {
        $("#nombre_conyugue").prop("disabled", true);
        $('input[name=c_fallecido]').prop("disabled",true);
        $('input[name=c_fallecido]').prop("checked",false);
        $('input[name=acta_matrimonio]').prop("disabled",true);
        $('input[name=acta_matrimonio]').prop("checked",false);
    }
    else {
        $("#nombre_conyugue").prop("disabled", false);
        $('input[name=c_fallecido]').prop("disabled",false);
    }
       });
    });

    $(function() {
        $("#hijo").prop("disabled",true);
        $("#edad_hijo").prop("disabled",true);
        $("#sexo_hijo").prop("disabled",true);
        $('input[name=partida_hijo]').prop("disabled",true);
        $('input[name=partida_hijo]').prop("checked",false);
        $("#confirmar_hijos").click(function() {
            if ($(this).val()=== "T") {
                $("#hijo").prop("disabled",false);
                $("#edad_hijo").prop("disabled",false);
                $("#sexo_hijo").prop("disabled",false);
                $('input[name=partida_hijo]').prop("disabled",false);
            }
            else{
                $("#hijo").prop("disabled",true);
            }
        })
    })
</script>

<script>
    (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
@endsection
