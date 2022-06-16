<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'issue_date' => now(),
            'due_date' => 'male',
            'phone' => $this->faker->numerify('##########'),
            'amount_paid' => $this->faker->numerify('######'),
            'total' => $this->faker->numerify('######'),
              'status' => 'active',
            'plan' => Str::random(10),
        
        ];
    }
}
