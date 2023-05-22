<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return response()->json($students);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'course' => 'required|integer|between:1,4',
            'specialty' => 'required',
        ]);

        $student = Student::create($validatedData);

        return response()->json($student, 201);
    }
}
