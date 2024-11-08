<?php

namespace Database\Seeders;

use App\Models\Event as ModelsEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\EventFactory;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsEvent::factory()->count(5)->create();
    }
}
