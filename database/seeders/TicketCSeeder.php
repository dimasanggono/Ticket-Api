<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tickeCategory;

class TicketCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tickeCategory::factory()->count(5)->create();
    }
}