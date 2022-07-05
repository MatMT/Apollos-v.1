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
            $table->string('last_name', 25)->after('name'); // Varchar 
            $table->enum('rol', ['artist', 'user', 'admin'])->default('user')->after('email_verified_at'); // Rol
            $table->string('name_artist', 25)->nullable(); // Varchar(30 caracteres máx
            $table->boolean('gender')->nullable(); // True: Femenino - False: Masculino
            $table->float('age', 3, 0); // Se calcula en base a la fecha de nacimiento y la fecha actual
            $table->date('birth_date'); // Fecha de nacimiento
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