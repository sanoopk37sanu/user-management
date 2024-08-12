<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'Name' => $this->faker->name,
            'Fk_designation' => $this->faker->numberBetween(1, 8),
            'Fk_department' =>  $this->faker->numberBetween(1, 5),
            'Phone_number' => "999599599",
        ];
    }
}
