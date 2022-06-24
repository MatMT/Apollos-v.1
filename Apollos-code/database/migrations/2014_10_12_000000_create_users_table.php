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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Integer(Entero) - Unsigned(Sin signo) - Increment (Autoincrementable) 
            $table->string('name', 20); // Varchar(20 caracteres máx)
            $table->string('last_name', 25); // Varchar(25 caracteres máx)
            $table->string('email', 50)->unique(); // Adicionalmente se le agrega la propiedad que protege este campo como datos unicos a nivel de base de datos
            $table->string('password'); // Contraseña
            $table->boolean('gender')->nullable(); // True: Femenino - False: Masculino
            $table->date('birth_date'); // Se solicita la fecha de nacimiento
            $table->float('age', 3, 0); // Se calcula en base a la fecha de nacimiento y la fecha actual
            $table->boolean('artist')->nullable(); // True: Artista - False: Usuario normal
            $table->string('name_artist', 30)->nullable(); // Varchar(30 caracteres máx)
            $table->timestamp('email_verified_at')->nullable(); // Para guardar fecha de verificación, puede quedar vacio
            $table->rememberToken(); // Varchar de 100 digitos para un token de validación al momento de iniciar sesión y mantenerla guardada
            $table->timestamps(); // Crea dos columnas para verificar la fecha y hora de creación y actualización
            // $table->text('parrafo'); // Textos largos 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
