<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name_event" => $this->faker->randomElement(['Joyland', "Dwp", "Hammersonic", "Wtf", "Pesta Pora"]),
            "description" => $this->faker->text, // Menghasilkan teks acak
            "date" => $this->faker->date, // Menghasilkan tanggal acak
            "location" => $this->faker->address, // Menghasilkan alamat acak
            "image_event" => $this->faker->imageUrl(), // Menghasilkan URL gambar acak


        ];
    }
}
