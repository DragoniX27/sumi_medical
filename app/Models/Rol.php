<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';

    public function Usuarios(){
        $this->hasMany('App\Models\User', 'id_rol');
    }


    public function Permisos()
    {
        return $this->belongsToMany('App\Models\Permiso', 'roles_has_permisos',  'id_rol', 'id_permiso' );
    }
}
