<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function caso1(){
        $header = ['id', 'nombre', 'correo'];

        $usuarios = User::whereIn('id_rol', [1,2])->select('id', 'nombre', 'correo')->get();
        

        return response()->json(['headers' => $header, 'info' => $usuarios]);
    }
}
