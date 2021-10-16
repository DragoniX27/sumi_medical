<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nombre' => 'administrador'
        ]);

        DB::table('roles')->insert([
            'nombre' => 'usuario'
        ]);

        DB::table('permisos')->insert([
            'permiso' => 'Crear'
        ]);

        DB::table('permisos')->insert([
            'permiso' => 'Actualizar'
        ]);

        DB::table('permisos')->insert([
            'permiso' => 'Leer'
        ]);

        DB::table('permisos')->insert([
            'permiso' => 'Eliminar'
        ]);

        for($i = 1; $i <= 4; $i++){
            DB::table('roles_has_permisos')->insert([
                'id_rol' => 1,
                'id_permiso'=> $i
            ]);
        }

        DB::table('roles_has_permisos')->insert([
            'id_rol' => 2,
            'id_permiso'=> 1
        ]);

        DB::table('roles_has_permisos')->insert([
            'id_rol' => 2,
            'id_permiso'=> 3
        ]);

        DB::table('users')->insert([
            'id_rol' => 1,
            'name' => 'administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);

        DB::table('users')->insert([
            'id_rol' => 2,
            'name' => 'Juan Carlos Bodoque',
            'email' => 'bodoque@31minutos.es',
            'password' => bcrypt('123456'),
        ]);
    }
}
