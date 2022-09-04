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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['pending', 'resolved'])->default('pending');
            $table->foreignId('reportingUser_id')->constrained('users')->onDelete('cascade'); // Usuario informante
            $table->foreignId('reportedUser_id')->constrained('users')->onDelete('cascade'); // Usuario reportado
            $table->string('reason', 30); // Razón de reporte
            $table->foreignId('song_id')->constrained()->onDelete('cascade'); // Canción reportada
            $table->foreignId('album_id')->constrained()->onDelete('cascade'); // Colección - Álbum
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
