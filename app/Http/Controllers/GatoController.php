<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Gato;
use App\Models\Raza;
use App\Http\Requests\StoreGatoRequest;
use App\Http\Requests\UpdateGatoRequest;

class GatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$gatos=Gato::orderBy('id','DESC')->get();

        $gatos=Gato::all();
        $razas=Raza::all();
        return view('admin.gatos.index',compact('gatos','razas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGatoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGatoRequest $request)
    {
        
        $gato=Gato::create($request->all());
        if ($request->file('photo')){
            $path=Storage::disk('public')->put('',$request->file('photo'));
            $gato->fill(['photo'=>$path])->save();

        }
        return redirect()->route('gatos.index')->with('info','se registro tu  gato');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gato  $gato
     * @return \Illuminate\Http\Response
     */
    public function show(Gato $gato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gato  $gato
     * @return \Illuminate\Http\Response
     */
    public function edit(Gato $gato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGatoRequest  $request
     * @param  \App\Models\Gato  $gato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGatoRequest $request, Gato $gato)
    {   $gato=Gato::find($gato->id);
        $gato->fill($request->all())->save();
        if ($request->file('photo')){
            $path=Storage::disk('public')->put('',$request->file('photo'));
            $gato->fill(['photo'=>$path])->save();

        }
        return redirect()->route('gatos.index')->with('info','se modifico tu gato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gato  $gato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gato $gato)
    {
        Gato::find($gato->id)->delete();
        return back()->with('info','se elimino tu gato');
    }
}
