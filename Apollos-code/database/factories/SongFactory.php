<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            // 'album_id' => Album::all()->random()->id,
            'name_song' => Str::ucfirst($this->faker->word()),
            'genre' =>  $this->faker->randomElement(['Pop', 'Rock', 'Electrónica', 'Instrumental']),
            'url' => 'Sweden-MC.mp3',
            'image' => 'default-song.png',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
