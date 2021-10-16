<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'permisos';

    public function Roles()
    {
        return $this->belongsToMany('App\Models\Rol', 'roles_has_permisos', 'id_rol', 'id_permiso' );
    }
}
