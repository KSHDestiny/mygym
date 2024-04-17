<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\User;
use App\Models\ClassType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScheduledClass>
 */
class ScheduledClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'instructor_id' => User::get()->random()->id,
            'class_type_id' => ClassType::get()->random()->id,
            'date_time' => Carbon::now()->addHours(rand(24,120))->minutes(0)->seconds(0)
        ];
    }
}
