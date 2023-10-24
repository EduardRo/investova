<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FundAdministrator;
use App\Models\Fund;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PressRelease>
 */
class PressReleaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = now();
        $endDate = $startDate->addDays(365);
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph(4),
            'date' => $this->faker->dateTimeBetween($startDate, $endDate),
            'id_fund' => Fund::factory(),
            'id_administrator' => FundAdministrator::factory(),

        ];
    }
}
