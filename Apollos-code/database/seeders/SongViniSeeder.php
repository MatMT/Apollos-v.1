<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongViniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //       ====================== > Kanye West< ===========================
        // ====================== > Kanye: Sencillos < ===========================

        // Sencillo Kanye West - 1 - Vini
        $KanyeWestSencillo1 = new Song();
        $KanyeWestSencillo1->album_id = 11; 
        $KanyeWestSencillo1->sencillo = true;
        $KanyeWestSencillo1->name_song = 'True Love';
        $KanyeWestSencillo1->time = '2:29';
        $KanyeWestSencillo1->genre = 'pop';
        $KanyeWestSencillo1->url = 'b695a8be-5bde-4a50-8d39-3503b8b32f47.mp3';
        $KanyeWestSencillo1->image = 'c2a57bf7-080b-4947-b7f6-9968d763e496.jpg';
        $KanyeWestSencillo1->created_at = now();
        $KanyeWestSencillo1->updated_at = now();
        $KanyeWestSencillo1->save();

        // ====================== > Kanye West: Álbumes < ===========================
        // Álbum Kanye - 1_1 - Vini
        $KanyeWestAlbum1 = new Song();
        $KanyeWestAlbum1->album_id = 12;
        $KanyeWestAlbum1->sencillo = false;
        $KanyeWestAlbum1->name_song = "Good Morning";
        $KanyeWestAlbum1->time = '3:07';
        $KanyeWestAlbum1->genre = 'pop';
        $KanyeWestAlbum1->url = '495d05a3-7d57-4755-810f-a56e1963fbd5.mp3';
        $KanyeWestAlbum1->image = 'c02eba96-1652-43e7-b2c0-037c59226522.jpg';
        $KanyeWestAlbum1->total = 187.14;
        $KanyeWestAlbum1->created_at = now();
        $KanyeWestAlbum1->updated_at = now();
        $KanyeWestAlbum1->save();

        // Álbum Kanye - 1_2 - Vini
        $KanyeWestAlbum2 = new Song();
        $KanyeWestAlbum2->album_id = 12;
        $KanyeWestAlbum2->sencillo = false;
        $KanyeWestAlbum2->name_song = "Good Life ft TPain";
        $KanyeWestAlbum2->time = '3:50';
        $KanyeWestAlbum2->genre = 'pop';
        $KanyeWestAlbum2->url = 'e3865153-e29f-4b83-88bd-f5d4c02d226b.mp3';
        $KanyeWestAlbum2->image = 'c02eba96-1652-43e7-b2c0-037c59226522.jpg';
        $KanyeWestAlbum2->total = 229.77;
        $KanyeWestAlbum2->created_at = now();
        $KanyeWestAlbum2->updated_at = now();
        $KanyeWestAlbum2->save();

        // Álbum Kanye - 1_3 - Vini
        $KanyeWestAlbum3 = new Song();
        $KanyeWestAlbum3->album_id = 12;
        $KanyeWestAlbum3->sencillo = false;
        $KanyeWestAlbum3->name_song = "I Wonder";
        $KanyeWestAlbum3->time = '4:52';
        $KanyeWestAlbum3->genre = 'pop';
        $KanyeWestAlbum3->url = 'c7508643-c3af-4d29-8529-82964d0b10c2.mp3';
        $KanyeWestAlbum3->image = 'c02eba96-1652-43e7-b2c0-037c59226522.jpg';
        $KanyeWestAlbum3->total = 291.53;
        $KanyeWestAlbum3->created_at = now();
        $KanyeWestAlbum3->updated_at = now();
        $KanyeWestAlbum3->save();

        // Álbum Kanye - 2_1 - Vini
        $KanyeWestAlbum4 = new Song();
        $KanyeWestAlbum4->album_id = 13;
        $KanyeWestAlbum4->sencillo = false;
        $KanyeWestAlbum4->name_song = "Fade";
        $KanyeWestAlbum4->time = '3:16';
        $KanyeWestAlbum4->genre = 'rap';
        $KanyeWestAlbum4->url = 'dee8a8a0-9325-4aa8-8c0e-b2a95f6d3a1c.mp3';
        $KanyeWestAlbum4->image = 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg';
        $KanyeWestAlbum4->total = 196.08;
        $KanyeWestAlbum4->created_at = now();
        $KanyeWestAlbum4->updated_at = now();
        $KanyeWestAlbum4->save();
        
        // Álbum Kanye - 2_2 - Vini
        $KanyeWestAlbum5 = new Song();
        $KanyeWestAlbum5->album_id = 13;
        $KanyeWestAlbum5->sencillo = false;
        $KanyeWestAlbum5->name_song = "Famous";
        $KanyeWestAlbum5->time = '3:16';
        $KanyeWestAlbum5->genre = 'rap';
        $KanyeWestAlbum5->url = '8ae370d8-11cc-40a8-8772-ded78cbc58c4.mp3.mp3';
        $KanyeWestAlbum5->image = 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg';
        $KanyeWestAlbum5->total = 291.53;
        $KanyeWestAlbum5->created_at = now();
        $KanyeWestAlbum5->updated_at = now();
        $KanyeWestAlbum5->save();

        // Álbum Kanye - 2_3 - Vini
        $KanyeWestAlbum6 = new Song();
        $KanyeWestAlbum6->album_id = 13;
        $KanyeWestAlbum6->sencillo = false;
        $KanyeWestAlbum6->name_song = "Father Stretch My Hands Pt 1";
        $KanyeWestAlbum6->time = '2:16';
        $KanyeWestAlbum6->genre = 'rap';
        $KanyeWestAlbum6->url = 'e846c2d0-dd93-4fb5-9040-34650555fd34.mp3';
        $KanyeWestAlbum6->image = 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg';
        $KanyeWestAlbum6->total = 135.97;
        $KanyeWestAlbum6->created_at = now();
        $KanyeWestAlbum6->updated_at = now();
        $KanyeWestAlbum6->save();


        //       ====================== > Tyler, The Creator< ===========================
        // ====================== > Tyler: Sencillos < ===========================        
        $TylerCreatSencillo1 = new Song();
        $TylerCreatSencillo1->album_id = 14; 
        $TylerCreatSencillo1->sencillo = true;
        $TylerCreatSencillo1->name_song = 'Cash In Cash Out';
        $TylerCreatSencillo1->time = '3:38';
        $TylerCreatSencillo1->genre = 'trap';
        $TylerCreatSencillo1->url = 'a49f9ca8-03de-45e2-be8c-b0bfe2aa6489.mp3';
        $TylerCreatSencillo1->image = '98d8de88-ca3b-4cd9-a45e-6b1567a577db.jpg';
        $TylerCreatSencillo1->created_at = now();
        $TylerCreatSencillo1->updated_at = now();
        $TylerCreatSencillo1->save();

        // ====================== > Tyler, The Creator: Álbumes < ===========================
        // Álbum Tyler - 1_1 - Vini
        $TylerCreatAlbum1 = new Song();
        $TylerCreatAlbum1->album_id = 12;
        $TylerCreatAlbum1->sencillo = false;
        $TylerCreatAlbum1->name_song = "EARFQUAKE";
        $TylerCreatAlbum1->time = '3:10';
        $TylerCreatAlbum1->genre = 'pop';
        $TylerCreatAlbum1->url = '6f169817-3f4f-476a-aa37-88c20477db2f.mp3';
        $TylerCreatAlbum1->image = 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg';
        $TylerCreatAlbum1->total = 190.12;
        $TylerCreatAlbum1->created_at = now();
        $TylerCreatAlbum1->updated_at = now();
        $TylerCreatAlbum1->save();

        // Álbum Tyler - 1_2 - Vini
        $TylerCreatAlbum2 = new Song();
        $TylerCreatAlbum2->album_id = 15;
        $TylerCreatAlbum2->sencillo = false;
        $TylerCreatAlbum2->name_song = "I THINK";
        $TylerCreatAlbum2->time = '3:32';
        $TylerCreatAlbum2->genre = 'pop';
        $TylerCreatAlbum2->url = '7d1f9525-4c07-4fbe-869a-2811f3c509ef.mp3';
        $TylerCreatAlbum2->image = 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg';
        $TylerCreatAlbum2->total = 212.06;
        $TylerCreatAlbum2->created_at = now();
        $TylerCreatAlbum2->updated_at = now();
        $TylerCreatAlbum2->save();

        // Álbum Tyler - 1_3 - Vini
        $TylerCreatAlbum3 = new Song();
        $TylerCreatAlbum3->album_id = 12;
        $TylerCreatAlbum3->sencillo = false;
        $TylerCreatAlbum3->name_song = "PUPPET";
        $TylerCreatAlbum3->time = '2:59';
        $TylerCreatAlbum3->genre = 'pop';
        $TylerCreatAlbum3->url = '3c778a20-7c97-4e0e-b45f-d3b08d5d1165.mp3';
        $TylerCreatAlbum3->image = 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg';
        $TylerCreatAlbum3->total = 179.07;
        $TylerCreatAlbum3->created_at = now();
        $TylerCreatAlbum3->updated_at = now();
        $TylerCreatAlbum3->save();

        // Álbum Tyler - 2_1 - Vini
        $TylerCreatAlbum4 = new Song();
        $TylerCreatAlbum4->album_id = 16;
        $TylerCreatAlbum4->sencillo = false;
        $TylerCreatAlbum4->name_song = "Where This Flower Blooms";
        $TylerCreatAlbum4->time = '3:15';
        $TylerCreatAlbum4->genre = 'pop';
        $TylerCreatAlbum4->url = '83dd5161-d133-4f8f-a650-83c8b0a129bb.mp3';
        $TylerCreatAlbum4->image = '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg';
        $TylerCreatAlbum4->total = 194.98;
        $TylerCreatAlbum4->created_at = now();
        $TylerCreatAlbum4->updated_at = now();
        $TylerCreatAlbum4->save();
        
        // Álbum Tyler - 2_2 - Vini
        $TylerCreatAlbum5 = new Song();
        $TylerCreatAlbum5->album_id = 16;
        $TylerCreatAlbum5->sencillo = false;
        $TylerCreatAlbum5->name_song = "See You Again";
        $TylerCreatAlbum5->time = '3:00';
        $TylerCreatAlbum5->genre = 'pop';
        $TylerCreatAlbum5->url = '0aed4103-b74b-4dca-8a79-3fbabbaa9cec.mp3';
        $TylerCreatAlbum5->image = '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg';
        $TylerCreatAlbum5->total = 180.43;
        $TylerCreatAlbum5->created_at = now();
        $TylerCreatAlbum5->updated_at = now();
        $TylerCreatAlbum5->save();

        // Álbum Tyler - 2_3 - Vini
        $TylerCreatAlbum6 = new Song();
        $TylerCreatAlbum6->album_id = 16;
        $TylerCreatAlbum6->sencillo = false;
        $TylerCreatAlbum6->name_song = "Glitter";
        $TylerCreatAlbum6->time = '3:45';
        $TylerCreatAlbum6->genre = 'pop';
        $TylerCreatAlbum6->url = '45b131bd-4444-4dd7-b1ec-0c879cc60d7b.mp3';
        $TylerCreatAlbum6->image = '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg';
        $TylerCreatAlbum6->total = 224.91;
        $TylerCreatAlbum6->created_at = now();
        $TylerCreatAlbum6->updated_at = now();
        $TylerCreatAlbum6->save();

    }
}
