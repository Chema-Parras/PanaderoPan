<?php

namespace App\Http\Controllers;

use App\Models\panadero;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PanaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosPanadero['panaderos']=panadero::paginate(1);
        return view('panadero.indexPanadero',$datosPanadero);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('panadero.createPanadero');
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
        $camposPanadero=[
            'Nombre' => 'required|string|max:100',
            'Apellido' => 'required|string|max:100',
            'Telefono' => 'required|string|max:100',
            'DNI' => 'required|string|max:100',
            'Movil' => 'required|string|max:100',
            'Correo' => 'required|email',
            'Direccion' => 'required|string|max:100',
            'CodPostal' => 'required|string|max:100'
        ];
        $mensaje=[
            'required'=>'El :attribute se requiere.'
            
        ];

        $this->validate($request,$camposPanadero,$mensaje);


        $datosPanadero=request()->except('_token');
        Panadero::insert($datosPanadero);
        // return response()->json($datosPanadero);

        return redirect('panadero')->with('mensaje','Panaderito agredado con satisfacción.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panadero  $panadero
     * @return \Illuminate\Http\Response
     */
    public function show(Panadero $panadero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panadero  $panadero
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Panadero)
    {
        //
        $panadero=Panadero::findOrFail($id_Panadero);
        return view('panadero.editPanadero', compact('panadero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panadero  $panadero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Panadero)
    {
        //
        $camposPanadero=[
            'Nombre' => 'required|string|max:100',
            'Apellido' => 'required|string|max:100',
            'Telefono' => 'required|string|max:100',
            'DNI' => 'required|string|max:100',
            'Movil' => 'required|string|max:100',
            'Correo' => 'required|email',
            'Direccion' => 'required|string|max:100',
            'CodPostal' => 'required|string|max:100'
        ];
        $mensaje=[
            'required'=>'El :attribute se requiere.'
            
        ];

        $this->validate($request,$camposPanadero,$mensaje);


        $datosPanadero = request()->except(['_token','_method']);
        Panadero::where('id_Panadero','=',$id_Panadero)->update($datosPanadero);

        $panadero=Panadero::findOrFail($id_Panadero);
        //return view('panadero.editPanadero', compact('panadero'));
        return redirect('panadero')->with('mensaje','Panaderito Modificadito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panadero  $panadero
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Panadero)
    {
        //
        Panadero::destroy($id_Panadero);
        return redirect('panadero')->with('mensaje','Panaderito borrado :(');

    }
}
