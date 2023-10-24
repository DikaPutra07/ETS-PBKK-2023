<?php

namespace Database\Seeders;

use App\Models\pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pegawai::factory()->count(10)->create();
    }
}
