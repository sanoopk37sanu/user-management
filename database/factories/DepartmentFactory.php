<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departmentNames = [
            'Human Resources',
            'Sales',
            'Marketing',
            'Finance',
            'IT',
            'Customer Support',
            'Logistics',
            'Product Development',
            'Legal',
            'Administration'
        ];

        return [
            'Name' => $this->faker->unique(true)->randomElement($departmentNames)
        ];
    }
}
