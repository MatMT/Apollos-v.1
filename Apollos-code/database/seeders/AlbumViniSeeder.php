<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumViniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //       ====================== > Kanye West < ===========================
        // Kanye sencillo - Vini
        $KanyeWestSencillo = new Album();
        $KanyeWestSencillo->user_id = 15;
        $KanyeWestSencillo->name_album = 'sencillos_kanye_west';
        $KanyeWestSencillo->sencillo = true;
        $KanyeWestSencillo->confirm = true;
        $KanyeWestSencillo->created_at = now();
        $KanyeWestSencillo->updated_at = now();
        $KanyeWestSencillo->save();
        // Kanye Album - Vini
        $KanyeWestAlbum1 = new Album();
        $KanyeWestAlbum1->user_id = 15;
        $KanyeWestAlbum1->name_album = 'Graduation';
        $KanyeWestAlbum1->genre = 'pop';
        $KanyeWestAlbum1->image = 'c02eba96-1652-43e7-b2c0-037c59226522.jpg';
        $KanyeWestAlbum1->sencillo = false;
        $KanyeWestAlbum1->duration = '11:48';
        $KanyeWestAlbum1->confirm = true;
        $KanyeWestAlbum1->created_at = now();
        $KanyeWestAlbum1->updated_at = now();
        $KanyeWestAlbum1->save();

        $KanyeWestAlbum2 = new Album();
        $KanyeWestAlbum2->user_id = 15;
        $KanyeWestAlbum2->name_album = 'The Life of Pablo';
        $KanyeWestAlbum2->genre = 'rap';
        $KanyeWestAlbum2->image = 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg';
        $KanyeWestAlbum2->sencillo = false;
        $KanyeWestAlbum2->duration = '08:48';
        $KanyeWestAlbum2->confirm = true;
        $KanyeWestAlbum2->created_at = now();
        $KanyeWestAlbum2->updated_at = now();
        $KanyeWestAlbum2->save();


        //       ====================== > Tyler, The Creator < ===========================
        // Tyler sencillo - Vini
        $TylerCreatSencillo = new Album();
        $TylerCreatSencillo->user_id = 14;
        $TylerCreatSencillo->name_album = 'sencillos_tyler_the_creator';
        $TylerCreatSencillo->sencillo = true;
        $TylerCreatSencillo->confirm = true;
        $TylerCreatSencillo->created_at = now();
        $TylerCreatSencillo->updated_at = now();
        $TylerCreatSencillo->save();
        // Tyler Album - Vini
        $TylerCreatAlbum1 = new Album();
        $TylerCreatAlbum1->user_id = 14;
        $TylerCreatAlbum1->name_album = 'IGOR';
        $TylerCreatAlbum1->genre = 'pop';
        $TylerCreatAlbum1->image = 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg';
        $TylerCreatAlbum1->sencillo = false;
        $TylerCreatAlbum1->duration = '09:41';
        $TylerCreatAlbum1->confirm = true;
        $TylerCreatAlbum1->created_at = now();
        $TylerCreatAlbum1->updated_at = now();
        $TylerCreatAlbum1->save();

        $TylerCreatAlbum2 = new Album();
        $TylerCreatAlbum2->user_id = 14;
        $TylerCreatAlbum2->name_album = 'Flower Boy';
        $TylerCreatAlbum2->genre = 'pop';
        $TylerCreatAlbum2->image = '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg';
        $TylerCreatAlbum2->sencillo = false;
        $TylerCreatAlbum2->duration = '13:00';
        $TylerCreatAlbum2->confirm = true;
        $TylerCreatAlbum2->created_at = now();
        $TylerCreatAlbum2->updated_at = now();
        $TylerCreatAlbum2->save();

        //       ====================== > Tyler, The Creator < ===========================
        // Tyler sencillo - Vini
        $jnjsusSencillo = new Album();
        $jnjsusSencillo->user_id = 17;
        $jnjsusSencillo->name_album = 'sencillos_jnj';
        $jnjsusSencillo->sencillo = true;
        $jnjsusSencillo->confirm = true;
        $jnjsusSencillo->created_at = now();
        $jnjsusSencillo->updated_at = now();
        $jnjsusSencillo->save();
    }
}
