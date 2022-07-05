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
            $table->id(); // Integer(Entero) - Unsigned(Sin signo) - Increment 
            $table->string('name', 20); // Varchar
            $table->string('email', 60)->unique(); // Varchar - Único
            $table->timestamp('email_verified_at')->nullable(); // Date de verificación
            $table->string('password'); // Contraseña
            $table->rememberToken(); // token de 100 digitos aplicado a la validación sobre inicio y mantenimiento de sesión
            $table->timestamps();  // Verifición date sobre creación y actualización
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
