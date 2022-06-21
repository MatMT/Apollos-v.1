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
            $table->string('name'); // Varchar(250 caracteres máx)
            $table->string('email')->unique(); // Adicionalmente se le agrega la propiedad que protege este campo como datos unicos a nivel de base de datos
            $table->timestamp('email_verified_at')->nullable(); // Para guardar fecha de verificación, puede quedar vacio
            $table->string('password');
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
