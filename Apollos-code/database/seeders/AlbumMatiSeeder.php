<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumMatiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // bbno$ - MATI
        $bbnoSencillos = new Album();
        $bbnoSencillos->user_id = 8;
        $bbnoSencillos->name_album = 'sencillos_bbno';
        $bbnoSencillos->sencillo = true;
        $bbnoSencillos->created_at = now();
        $bbnoSencillos->updated_at = now();
        $bbnoSencillos->save();

        $bbnoAlbum = new Album();
        $bbnoAlbum->user_id = 8;
        $bbnoAlbum->name_album = 'Eat ya veggies';
        $bbnoAlbum->genre = 'hip hop';
        $bbnoAlbum->image = '53806cbc-650a-458d-a9ee-614725b5a427.jpg';
        $bbnoAlbum->sencillo = false;
        $bbnoAlbum->duration = '7:37';
        $bbnoAlbum->confirm = true;
        $bbnoAlbum->created_at = now();
        $bbnoAlbum->updated_at = now();
        $bbnoAlbum->save();

        // ================================================================

        // Cuco - MATI
        $CucoSencillos = new Album();
        $CucoSencillos->user_id = 9;
        $CucoSencillos->name_album = 'sencillos_cuco';
        $CucoSencillos->sencillo = true;
        $CucoSencillos->created_at = now();
        $CucoSencillos->updated_at = now();
        $CucoSencillos->save();

        $CucoAlbum = new Album();
        $CucoAlbum->user_id = 9;
        $CucoAlbum->name_album = 'Fantasy Gateway';
        $CucoAlbum->genre = 'indie';
        $CucoAlbum->image = '05a926af-5cda-4800-8138-441ae5bae12b.jpg';
        $CucoAlbum->sencillo = false;
        $CucoAlbum->duration = '9:43';
        $CucoAlbum->confirm = true;
        $CucoAlbum->created_at = now();
        $CucoAlbum->updated_at = now();
        $CucoAlbum->save();
    }
}
