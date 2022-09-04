<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name', 25)->after('name')->nullable(); // Varchar 
            $table->enum('rol', ['artist', 'user', 'admin'])->after('last_name'); // Rol
            $table->string('username', 25)->after('email'); // Varchar - Input exacta
            $table->enum('status', ['active', 'inactive'])->default('active')->after('username'); // Estado de cuenta
            $table->integer('age')->after('status')->nullable(); // Se calcula en base a la fecha de nacimiento y la fecha actual
            $table->string('name_artist', 25)->nullable(); // Varchar(30 caracteres máx) - Input modificada
            $table->boolean('gender')->nullable()->nullable(); // True: Femenino - False: Masculino
            $table->date('birth_date')->nullable(); // Fecha de nacimiento
            $table->string('image', 40)->default('default-Pfp.png')->nullable(); // Foto de perfil
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
