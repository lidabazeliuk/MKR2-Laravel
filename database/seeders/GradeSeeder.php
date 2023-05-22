<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    public function run()
    {
        $grades = [
            [
                'subject' => 'Mathematics',
                'score' => 85,
                'date' => '2022-01-15',
            ],
            [
                'subject' => 'Physics',
                'score' => 90,
                'date' => '2022-02-20',
            ],
            [
                'subject' => 'Chemistry',
                'score' => 75,
                'date' => '2022-03-10',
            ],
        ];

        foreach ($grades as $grade) {
            Grade::create($grade);
        }
    }
}
