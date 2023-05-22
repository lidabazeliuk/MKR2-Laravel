<?php

namespace App\Providers;

use App\Models\Student;
use App\Policies\StudentPolicy;

protected $policies = [
    Student::class => StudentPolicy::class,
];
