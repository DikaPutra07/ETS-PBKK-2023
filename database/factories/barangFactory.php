<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\barang>
 */
class barangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'jenis_id' => $this->faker->numberBetween(1, 2),
            'kondisi_id' => $this->faker->numberBetween(1, 3),
            'keterangan' => $this->faker->randomLetter(),
            'kecacatan' => $this->faker->randomLetter(),    
            'jumlah' => $this->faker->randomNumber(),
            'gambar' => $this->faker->image(),         
        ];
    }
}
