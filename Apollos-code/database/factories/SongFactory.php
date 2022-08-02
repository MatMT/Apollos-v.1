<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name_song' => $this->faker->word(),
            'genre' =>  $this->faker->randomElement(['Pop', 'Rock', 'Electrónica', 'Instrumental']),
            'user_id' => User::all()->random()->id,
            'url' => 'Sweden-MC.mp3',
            'image' => 'default-song.png',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
