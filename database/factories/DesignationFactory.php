<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Designation>
 */
class DesignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $designations = [
            'Software Engineer',
            'Product Manager',
            'Marketing Specialist',
            'UX Designer',
            'Sales Executive',
            'Data Analyst',
            'Customer Support Manager',
            'HR Coordinator'
        ];

        return [
            'Name' => $this->faker->unique(true)->randomElement($designations)
        ];
    }
}
