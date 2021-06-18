<?php

namespace App\Http\Controllers;

use App\Models\pan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosPan['pans']=Pan::paginate(5);
        return view('pan.indexPan',$datosPan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pan.createPan');
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
        $datosPan=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosPan['Foto']=$request->file('Foto')->store('uploads','public');
        }


        Pan::insert($datosPan);
        return response()->json($datosPan);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pan  $pan
     * @return \Illuminate\Http\Response
     */
    public function show(Pan $pan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pan  $pan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Pan)
    {
        //
        $pan=Pan::findOrFail($id_Pan);
        return view('pan.editPan', compact('pan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pan  $pan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Pan)
    {
        //
        $datosPan=request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $pan=Pan::findOrFail($id_Pan);

            Storage::delete('public/'.$pan->Foto);
            
            $datosPan['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Pan::where('id_Pan','=',$id_Pan)->update($datosPan);
        $pan=Pan::findOrFail($id_Pan);
        return view('pan.editPan', compact('pan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pan  $pan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Pan)
    {
        //
        Pan::destroy($id_Pan);
        return redirect('pan');
    }
}
