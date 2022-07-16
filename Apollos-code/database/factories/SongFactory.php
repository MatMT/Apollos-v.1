<?php

namespace Database\Factories;

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
            'genre' =>  $this->faker->randomElement(['Pop', 'Electronic', 'Salsa']),
            'user_id' => $this->faker->randomElement([1, 2]),
            'link' => 'https//' . $this->faker->uuid() . '.com',
            'image' => $this->faker->uuid() . '.jpg',
        ];
    }
}
