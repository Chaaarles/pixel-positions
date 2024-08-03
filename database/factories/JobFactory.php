<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Number;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => Number::currency(fake()->randomFloat(0, 30000, 300000)),
            'location' => fake()->city(),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Contract', 'Temporary']),
            'url' => fake()->url(),
            'featured' => false,
            'employer_id' => Employer::factory(),
        ];
    }
}
