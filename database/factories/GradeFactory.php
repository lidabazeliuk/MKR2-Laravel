<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grade;

class GradeFactory extends Factory
{
    protected $model = Grade::class;

    public function definition()
    {
        return [
            'subject' => $this->faker->word,
            'score' => $this->faker->numberBetween(0, 100),
            'date_received' => $this->faker->date,
        ];
    }
}
