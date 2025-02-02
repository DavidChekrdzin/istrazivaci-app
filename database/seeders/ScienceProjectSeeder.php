<?php

namespace Database\Seeders;

use App\Models\ScienceProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScienceProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ScienceProject::factory()->count(10)->create();
    }
}
