<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumMartinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sencillos de Pereira

        $pereiraSencillos = new Album();
        $pereiraSencillos->user_id = 16;
        $pereiraSencillos->name_album = 'sencillos_pereira';
        $pereiraSencillos->sencillo = true;
        $pereiraSencillos->confirm = true;
        $pereiraSencillos->created_at = now();
        $pereiraSencillos->updated_at = now();
        $pereiraSencillos->save();


        
    }
}
