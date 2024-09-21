<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'address' => 'required',
            'telephone' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }
    public function index()
    {
        $students = Student::all(); // Fetch all students
        return view('students.index', compact('students')); // Pass students to the view
    }
}
