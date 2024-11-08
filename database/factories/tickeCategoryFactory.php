<?php

namespace Database\Factories;

use App\Models\Event;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class tickeCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "category_id"  => $this->faker->randomNumber(1),
            "event_id" => $this->faker->randomNumber(1), // Fetching from the Event model
            "price" => $this->faker->randomElement(["Rp.250.000", "Rp.350.000"])
        ];
    }
}
