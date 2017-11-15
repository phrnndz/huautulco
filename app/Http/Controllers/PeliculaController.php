<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use Image;
use Storage;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::latest()->paginate(5);
        return view('dashboard.pelicula.home',compact('peliculas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pelicula.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         request()->validate([
            'nombre' => 'required',
            'imagenURL' => 'sometimes|image',
            'horario' => 'required',
            'idioma' => 'required',
            'actores' => 'sometimes',
            'directores' => 'sometimes',
            'trailerURL' => 'sometimes',
            'duracion' => 'required',
            'descripcion' =>'required',
            'clasificacion' => 'required',
            'fechaInicio' => 'required',
            'fechaTermino' => 'required'
        ]);

        Pelicula::create($request->all());
        return redirect()->route('pelicula.index')
                        ->with('success','Movie created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Pelicula::find($id);
        return view('dashboard.pelicula.edit',compact('pelicula','id'));
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
        $pelicula = Pelicula::find($id);
        $this->validate(request(), [
            'nombre' => 'required',
            'imagenURL' => 'sometimes|image',
            'horario' => 'required',
            'idioma' => 'required',
            'actores' => 'sometimes',
            'directores' => 'sometimes',
            'trailerURL' => 'sometimes',
            'duracion' => 'required',
            'descripcion' =>'required',
            'clasificacion' => 'required',
            'fechaInicio' => 'required',
            'fechaTermino' => 'required'
        ]);
        if ($request->hasFile('imagenURL')) {
            $thumbnail = $request->file('imagenURL');
            $nombreImagen = time().'.'. $thumbnail->getClientOriginalExtension();
            $ubicacion = public_path('images/'.$nombreImagen);
            Image::make($thumbnail)->save($ubicacion);
            $imagenAnterior = $pelicula->imagenURL;
            $pelicula->imagenURL= $nombreImagen;
            Storage::delete($imagenAnterior);
        }
        $pelicula->nombre = $request->get('nombre');
        $pelicula->horario = $request->get('horario');
        $pelicula->idioma = $request->get('idioma');
        $pelicula->actores = $request->get('actores');
        $pelicula->directores = $request->get('directores');
        $pelicula->trailerURL = $request->get('trailerURL');
        $pelicula->duracion = $request->get('duracion');
        $pelicula->descripcion = $request->get('descripcion');
        $pelicula->clasificacion = $request->get('clasificacion');
        $pelicula->duracion = $request->get('duracion');

        $pelicula->save();

        return redirect()->route('pelicula.index')
                        ->with('success','Movie created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->delete();
        return redirect()->route('cartelera.index')
                        ->with('success','Movie created successfully');
    }
}
