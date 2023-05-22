<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;


class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'course' => $this->faker->numberBetween(1, 4),
            'specialty' => $this->faker->randomElement(['Specialty 1', 'Specialty 2', 'Specialty 3']),
        ];
    }
}
