<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
       $users = $user->all();
        return view("panel.user.index",compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $users = $user->all();
        return view("panel.user.form", compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();

            $nombre = $request->name;
            $email = $request->mail;
            $password= bcrypt($request->password);
            $user = $request->user;


            $datos["name"]=$nombre;
            $datos["email"]=$email;
            $datos["password"]=$password;
            $datos["user"]=$user;

        if(User::create($datos)):
            return redirect()->route("user.index")->with("ok","Usuario cargado con éxito!");
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
        $users = User::all();
        $user= User::find($id);

        return view("panel.user.form",compact("user","users"));
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
        $user = User::find($id);

        $datos = $request->all();




        if($user->update($datos)):
            return redirect()->route("user.index")->with("ok","Se modificó correctamente");
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
    public function destroy($id, User $users)
    {
        $user = $users->find($id);

        if($user->delete()):
            return redirect()->route("user.index")->with('ok','El usuario ha sido eliminado con éxito!');
        else:
            return redirect()->back()->withErrors("No se pudo eliminar");
        endif;

    }
}
