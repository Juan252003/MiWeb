<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeCursoRequest;
use Illuminate\Http\Request;
use App\Models\curso;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //creamos un array para poder manipular la informacion de la tabla cursos
        //a su vez el array actuara como un objeto para

        $cursito = curso::all();
        //el metodo compact pide un parametro el cual sera nuestro array llamado cursito y va acompañado la vista que estamos llamando
        return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeCursoRequest $request)
    {   
        /*$validacionDatos = $request->validate([
            'nombre'=>'required|max:10',
            'imagen'=>'required|image'
        ]);*/
        
        //con el metodo all() veo toda la informacion
        //return $request->all();

        /* obtuvimos el dato de lo que el usuario envia por el input
        cuyo name es 'descripcion'
        */
        //return $request->input('nombre');
        //creamos una nueva instancia del modelo
        $cursito = new curso();
        //esto me permitira manipular la tabla
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');
        if ($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public');
        }
        $cursito->horas = $request->input('horas');
        $cursito->save();
        return 'waw lo lograstes guardar';

        //implementamos validaciones del
        
        
    }

    /**
     * Muestra el recurso especificado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursito = curso::find($id);
        
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = curso::find($id);
        return view('cursos.edit', compact('cursito'));
        //return $cursito;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cursito = curso::find($id);
        //con fill llenamos los campos de la base de datos

        $cursito->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public');
        }
        $cursito->save();
        return 'Recurso actualizado';
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cursito= curso::find($id);
        $nombre = $cursito->nombre;
        $urlImagenBD = $cursito->imagen;
        //return $urlImagenBD;
        $nombreImagen = str_replace('public/','\storage\\',$urlImagenBD);
        //return nombreImagen;
        $rutaCompleta = public_path().$nombreImagen;
        //return $rutaCompleta;

        unlink($rutaCompleta);
        $cursito->delete();
        return 'El curso ' .$nombre. ' ha sido eliminado';
    }
}
