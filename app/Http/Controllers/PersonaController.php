<?php

namespace App\Http\Controllers;

use App\Models\Anexo;
use App\Models\Beneficiario;
use App\Models\Familia;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::orderBy('id','desc')->paginate(10);
        return view('persona.index',compact('persona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$facultades = collect(['Facultad de Ciencias Médicas','Facultad de Ciencias de la Educación y Humanidades',
        'Facultad de Odontología','Facultad de Ciencias Jurídicas y Sociales','Facultad de Ciencia y Tecnología',
        'Facultad de Ciencias Ecónomicas Empresariales y Turísmo','Facultad de Ciencias Químicas',
        'Escuela Ciencias Agrarías y Veterinarias']);*/

        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPersona =  new Persona();
        $datosFamilia = new Familia();
        $datosBen = new Beneficiario();
        $datosAnexo = new Anexo();

      /* $request->validate([
            'fecha_afiliacion' => 'required',
            'fecha_ingreso' => 'required',
            'correo' => 'unique:personas| required',
            'nombre' => 'required',
            'cedula' => 'required|unique:personas|max:14',
            'inss' => 'required|unique:personas',
            'direccion' => 'required',
            'facultad' => 'required',
            'departamento' => 'required'
        ]);*/

        $datosPersona->fecha_afiliacion = $request->fecha_afiliacion;
        $datosPersona->fecha_ingreso =  $request->fecha_ingreso;
        $datosPersona->fecha_actualizacion =  $request->fecha_actualizacion;
        $datosPersona->correo = $request->correo;
        $datosPersona->nombre =  $request->nombre;
        $datosPersona->cedula =  $request->cedula;
        $datosPersona->inss =  $request->inss;
        $datosPersona->direccion =  $request->direccion;
        $datosPersona->telefono_casa =  $request->telefono_casa;
        $datosPersona->telefono_tigo =  $request->telefono_tigo;
        $datosPersona->telefono_claro =  $request->telefono_claro;
        $datosPersona->telefono_trabajo =  $request->telefono_trabajo;
        $datosPersona->facultad =  $request->facultad;
        $datosPersona->departamento =  $request->departamento;

        $datosFamilia->estado_civil = $request->estado_civil;
        $datosFamilia->padre = $request->padre;
        $datosFamilia->madre = $request->madre;
        $datosFamilia->nombre_conyugue = $request->conyugue;
        $datosFamilia->hijo = $request->hijo;
        $datosFamilia->p_fallecido = $request->p_fallecido;
        $datosFamilia->m_fallecida = $request->m_fallecida;
        $datosFamilia->c_fallecido = $request->c_fallecido;
        $datosFamilia->edad_hijo = $request->edad_hijo;
        $datosFamilia->sexo_hijo = $request->sexo_hijo;

        $datosBen->b_cedula = $request->b_cedula;
        $datosBen->nombre_b = $request->nombre_b;
        $datosBen->parentezco = $request->parentezco;
        $datosBen->celular = $request->celular;

        $datosAnexo->partida_afiliado = $request->partida_afiliado;
        $datosAnexo->partida_hijo = $request->partida_hijo;
        $datosAnexo->partida_padres = $request->partida_padres;
        $datosAnexo->acta_matrimonio = $request->acta_matrimonio;
        $datosAnexo->declaracion_notariada = $request->declaracion_notariada;
        $datosAnexo->observaciones = $request->observaciones;

        $datosPersona->save();
        $datosPersona->beneficiarios()->save($datosBen);
        $datosPersona->familias()->save($datosFamilia);
        $datosPersona->anexo()->save($datosAnexo);

        return redirect()->route('persona.index')->with('guardar','ok');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        $datos = $persona->familias->all();
        return view('persona.edit',compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $persona->fecha_afiliacion = $request->fecha_afiliacion;
        $persona->fecha_ingreso =  $request->fecha_ingreso;
        $persona->fecha_actualizacion =  $request->fecha_actualizacion;
        $persona->correo = $request->correo;
        $persona->nombre =  $request->nombre;
        $persona->cedula =  $request->cedula;
        $persona->inss =  $request->inss;
        $persona->direccion =  $request->direccion;
        $persona->telefono_casa =  $request->telefono_casa;
        $persona->telefono_tigo =  $request->telefono_tigo;
        $persona->telefono_claro =  $request->telefono_claro;
        $persona->telefono_trabajo =  $request->telefono_trabajo;
        $persona->facultad =  $request->facultad;
        $persona->departamento =  $request->departamento;

        $persona->save();
        return redirect()->route('persona.index',$persona);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('persona.index')->with('eliminar','ok');
    }
}
