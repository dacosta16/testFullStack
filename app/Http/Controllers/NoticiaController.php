<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['noticias']=Noticia::paginate(10)->sortBy('id', SORT_NUMERIC, 'id');
       return view('noticia.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('noticia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'Titulo'=>'required|string|max:200',
            'Descripcion'=>'required|string|max:200',
            'Foto'=>'required|url|max:10000',
        ];

        $mensaje=[
            'Titulo.required'=>'El titulo es requerido',
            'Descripcion.required'=>'La descripcion es requerida',
            'Foto.required' => 'La foto es requerida'
        ];

        $this->validate($request, $campos, $mensaje);
     
        $datosNoticia = $request->except('_token');
        Noticia::insert($datosNoticia);
        
        return redirect('noticia')->with('mensaje', 'Noticia guardada exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $noticia=Noticia::findOrFail($id);
        return view('noticia.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos=[
            'Titulo'=>'required|string|max:200',
            'Descripcion'=>'required|string|max:200',
            'Foto'=>'required|url|max:10000',
        ];

        $mensaje=[
            'Titulo.required'=>'El titulo es requerido',
            'Descripcion.required'=>'La descripcion es requerida',
            'Foto.required' => 'La foto es requerida'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosNoticia = request()->except(['_token', '_method']);
        Noticia::where('id', '=', $id)->update($datosNoticia);

        $noticia=Noticia::findOrFail($id);
        //return view('noticia.edit', compact('noticia'));
        return redirect('noticia')->with('mensaje', 'Noticia modificada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Noticia::destroy($id);
        return redirect('noticia')->with('mensaje', 'Noticia eliminada exitosamente!');
    }
}
