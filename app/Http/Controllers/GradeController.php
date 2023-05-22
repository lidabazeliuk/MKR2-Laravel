<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('grades.index', compact('grades'));
    }

    public function create()
    {
        return view('grades.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'score' => 'required|integer|min:0|max:100',
            'date' => 'required|date',
        ]);

        Grade::create($validatedData);

        return redirect()->route('grades.index')->with('success', 'Grade created successfully');
    }

    public function show($id)
    {
        $grade = Grade::findOrFail($id);
        return view('grades.show', compact('grade'));
    }

    public function edit($id)
    {
        $grade = Grade::findOrFail($id);
        return view('grades.edit', compact('grade'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'score' => 'required|integer|min:0|max:100',
            'date' => 'required|date',
        ]);

        $grade = Grade::findOrFail($id);
        $grade->update($validatedData);

        return redirect()->route('grades.index')->with('success', 'Grade updated successfully');
    }

    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();

        return redirect()->route('grades.index')->with('success', 'Grade deleted successfully');
    }
}
