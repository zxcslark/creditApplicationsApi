<?php

namespace Database\Factories;

use App\Models\Bank;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CreditApplication>
 */
class CreditApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dealer' => fake()->name,
            'contact_person' => fake()->name,
            'summ' => $this->generateRandomFloat(0.0, 100000.0),
            'credit_term' => rand(0, 1000),
            'interest_rate' => $this->generateRandomFloat(0.0, 100.0) ,
            'reason' => fake()->sentence,
            'status' => fake()->randomElement(['new', 'progress', 'approved', 'denied']),
            'bank_id' => Bank::all()->random()->id
        ];
    }

    private function generateRandomFloat(float $minValue, float $maxValue): float
    {
        return $minValue + mt_rand() / mt_getrandmax() * ($maxValue - $minValue);
    }
}
