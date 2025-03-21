<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'employer' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['45 000 EUR','37 000 EUR','43 000 EUR']),
            'location' => 'Remote',
            'schedule' => 'Full Time',
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}
