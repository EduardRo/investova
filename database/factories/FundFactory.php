<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FundAdministrator;
use App\Models\Fund;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fund>
 */
class FundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fund_name' => $this->faker->company,
            'category' => $this->faker->company,
            'fund_administrator_id' => FundAdministrator::factory(),
            'phone' => $this->faker->phoneNumber,
            'contact_person' => $this->faker->name,
            'email' => $this->faker->email,
        ];
    }
}
