<?php

namespace App\Http\Controllers;


use App\Models\Merch;
use Dotenv\Validator;
use Illuminate\Http\Request;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Merch $merch)
    {
        $merchs = $merch->all();
        return view("panel.merch.index",compact("merchs"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Merch $merch)
    {
        $merchs = $merch->all();

        return view("panel.merch.form",compact("merchs"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $datos = $request->all();

        if($request->hasFile('imagen')):

            $nombre = $request->nombre . "." . $request->imagen->extension();
            $request->imagen->storeAs("merch",$nombre);
            $datos["imagen"]= "img/$nombre";
        endif;

        if(Merch::create($datos)):
            return redirect()->route("merch.index")->with("ok","Merch cargado con éxito!");
        else:
            return redirect()->back()->withInput()->withErrors("No se pudo cargar");
        endif;

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
        $merchs = Merch::all();
        $merch = Merch::find($id);

        return view("panel.merch.form",compact("merch","merchs"));
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
        $merch = Merch::find($id);

        $datos = $request->all();

        if($request->hasFile('imagen')):

            $nombre = $request->nombre . "." . $request->imagen->extension();
            $request->imagen->storeAs("merch",$nombre);
            $datos["imagen"]= "img/$nombre";

        endif;

        if($merch->update($datos)):
            return redirect()->route("merch.index")->with("ok","Se modificó correctamente");
        else:
            return redirect()->back()->withInput()->withErrors("Error al editar");
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Merch $merchs)
    {
        $merch = $merchs->find($id);

        if($merch->delete()):
            return redirect()->route("merch.index")->with('ok','Merch eliminado con éxito!');
        else:
            return redirect()->back()->withErrors("No se pudo eliminar");
        endif;

    }
}
