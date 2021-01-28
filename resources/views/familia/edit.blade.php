

    <div class="col-12">

        <div class="col-md-6">
            <label for="estado_civil" class="form-label">Estado Civil</label>
            <select class="form-select" aria-label="Default select example" id="estado_civil" name="estado_civil">
                <option selected value="{{$familia->estado_civil}}">{{$familia->estado_civil}}</option>
                <option value="soltero">Soltero</option>
                <option value="soltero">Casado</option>
                <option value="soltero">Acompañado</option>
            </select>
          </div>
    </div>
    <div class="col-md-6">
        <label for="nombre_conyugue" class="form-label">Nombre del Conyugue</label>
        <input type="text" class="form-control" id="nombre_conyugue" name="nombre_conyugue" value="{{$familia->nombre_conyugue}}">
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
            <option selected value="{{$familia->sexo_hijo}}">value="{{$familia->sexo_hijo}}"</option>
            <option value="femenino">Femenino</option>
            <option value="masculino">Másculino</option>
          </select>
    </div>



 



