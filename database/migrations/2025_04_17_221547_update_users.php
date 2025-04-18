<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::Table('users',function(Blueprint $table){
            $table->renameColumn('name','nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::Table('users',function(Blueprint $table){
            $table->renameColumn('nombre','name');
            $table->dropColumn(['primer_apellido','segundo_apellido','id_rol']);
        });

    }
};
