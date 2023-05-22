<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Student;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return in_array($user->role, ['admin', 'editor']);
    }
}
