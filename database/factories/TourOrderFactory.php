<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TourOrder>
 */
class TourOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 10),
            'tour_id' => rand(1, 10),
            'hotel_id' => (rand(1, 5) == 1) ? null : rand(1, 10),
            'date' => fake()->date(),
            'time' => fake()->time()
        ];
    }
}
