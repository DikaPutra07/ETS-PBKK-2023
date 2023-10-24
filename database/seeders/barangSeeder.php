<?php

namespace Database\Seeders;

use App\Models\barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        barang::factory()->count(10)->create();
    }
}
