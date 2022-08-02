<?php

namespace Database\Factories;

use App\Http\Controllers\AgeController;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Formateo de Username
        $user = $this->faker->userName();
        $userU = Str::ucfirst($user);

        // Nacimiento y edad
        $date = $this->faker->dateTimeBetween('-25 year', '-13 year');
        // Convertimos a cadena (Porque el controlador espera una cadena)
        $StringD = $date->format('Y-m-d');
        // Nos devuelve la edad
        $age = new AgeController($StringD);

        // Tipos de usuarios
        // 'rol' =>  $this->faker->randomElement(['artist', 'user']),

        return [
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'rol' =>  $this->faker->randomElement(['artist']),
            'email' => $this->faker->unique()->safeEmail(),
            'username' => $userU,
            'status' => 'active',
            'age' => $age->age,
            // 'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'name_artist' => $user,
            'gender' => $this->faker->numberBetween(0, 1),
            'birth_date' => $date,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
