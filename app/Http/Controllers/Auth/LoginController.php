<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/panel';


    public function username()
    {
        return "user";
    }
    public function validateLogin(Request $request)
    { $usuario = $request->get("user");
        $password = $request->get("password");

        $user = User::where("email",$usuario);

        if($user->count() > 0):
            $tipo = "email";
            $user = $user->first();
        else:
            $user = User::where("user",strtoupper($usuario))->first();
            $tipo = "user";
        endif;

        if(!$user)
            return redirect()->back()->withErrors("Los datos ingresados no son válidos")->withInput();

        // Chequea si los datos que paso coinciden y si coinciden lo loguea
        if(Auth::attempt([$tipo => $user,"password" => $password])):
            // El usuario/mail ingresado y la clave son correctos

        else:
            return redirect()->back()->withErrors("El usuario o clave no son correctos")->withInput();
        endif;


    }

    public function authenticate(Request $request){
        $credenciales = $request->only("user","password");

        $campo = "user";

        if(strpos("@",$credenciales["user"]))
            $campo = "email";

        if(Auth::attempt([$campo => $credenciales["user"], "password" => $credenciales["password"]])):
            // Si pasa esto el usuario está logueado

            return redirect()->route("panel.index");

        endif;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
