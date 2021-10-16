<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RolesAndPermisions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',191);
        });

        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->string('permiso',191);
        });

        Schema::create('roles_has_permisos', function (Blueprint $table) {
            $table->bigInteger('id_rol')->unsigned();
            $table->bigInteger('id_permiso')->unsigned();
            
            $table->foreign('id_rol')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('id_permiso')->references('id')->on('permisos')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
