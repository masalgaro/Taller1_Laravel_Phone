<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phone<
 */
class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'memory' => fake()->name(),
            'ram' => fake()->name(),
            'battery' => fake()->name(),
            'brand' => fake()->name(),
            'quantity' => fake()->numberBetween(1, 10),
            'picurl' => 'https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse4.mm.bing.net%2Fth%2Fid%2FOIP.6LUtte3XQoahx-lE2sFIrAHaHa%3Fpid%3DApi&sp=1771737019T780c32e7d6145ce46dccc4904683d16913ff9103c187fcfe469f62609f9cbbc8',
        ];
    }
}
