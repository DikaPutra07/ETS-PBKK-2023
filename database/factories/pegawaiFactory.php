<?php

namespace Database\Factories;

use App\Models\pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pegawai>
 */
class pegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 70),
            'address' => $this->faker->address(),
            'birthdate' => $this->faker->date(),
            'birthplace' => $this->faker->city(),            
        ];
    }
}
