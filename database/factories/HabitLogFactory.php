<?php

namespace Database\Factories;

use App\Models\HabitLog;
use App\Models\Habit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<HabitLog>
 */
class HabitLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'completed_at' => now()->format('Y-m-d'),
        ];
    }
}
