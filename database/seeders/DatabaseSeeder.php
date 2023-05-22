<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $students = [
            [
                'name' => 'John Doe',
                'course' => 1,
                'specialty' => 'Computer Science',
            ],
            [
                'name' => 'Jane Smith',
                'course' => 2,
                'specialty' => 'Mathematics',
            ],
            [
                'name' => 'Tom Johnson',
                'course' => 3,
                'specialty' => 'Physics',
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
