<?php

namespace Database\Seeders;

use App\Models\Habit;
use App\Models\HabitLog;
use Illuminate\Database\Seeder;

class HabitLogSeeder extends Seeder
{
    public function run(): void
    {
        $habits = Habit::all();

        foreach ($habits as $habit) {
            HabitLog::factory()
                ->count(3)
                ->sequence(fn ($sequence) => [
                    'completed_at' => now()
                        ->subDays($sequence->index)
                        ->format('Y-m-d'),
                ])
                ->create([
                    'habit_id' => $habit->id,
                    'user_id' => 1,
                ]);
        }
    }
}