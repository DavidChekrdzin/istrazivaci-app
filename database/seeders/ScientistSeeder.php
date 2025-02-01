<?php

namespace Database\Seeders;

use App\Models\Scientist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScientistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scientist::factory()->count(50)->create();
    }
}
