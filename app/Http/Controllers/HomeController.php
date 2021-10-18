<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Rol;
use App\Models\User;
use App\Models\Permiso;
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
        $headers = ['id', 'name', 'email'];

        $usuarios = User::whereIn('id_rol', [1,2])->select('id', 'name', 'email')->get();
        
        return response()->json(['headers' => $headers, 'info' => $usuarios]);
    }

    public function caso2(){
        $headers = ['id', 'permiso'];

        $permisos = Permiso::with([
            'Roles' => function($query){
                $query->where('id', '=', 1);
        }])->get();


        return response()->json(['headers' => $headers, 'info' => $permisos]);
    }

    public function caso3(){
        $headers = [];
        $usuarios = User::with(['Rol' => function($query){
            return $query->with(['Permisos' => function($query2){
                return  $query2->where('id', '=', 2);
            }]);
        }])addSelect('')->get();

        return response()->json(['headers' => $headers, 'info' => $usuarios]);
        dump($usuarios);
    }
}
