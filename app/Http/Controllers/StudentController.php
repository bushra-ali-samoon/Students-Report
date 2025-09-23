<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function fetch()
{
    $students = Student::all();
    return response()->json([
        'success' => true,
        'students' => $students
    ]);
}

    public function store(Request $request)
{
    // Validate input
    $request->validate([
        'name'  => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
    ]);

    // Handle file upload
    $path = null;
    if ($request->hasFile('profile_picture')) {
        $path = $request->file('profile_picture')->store('students', 'public');
    }

    // Save student
    Student::create([
        'name'  => $request->name,
        'email' => $request->email,   // ✅ include email
        'profile_picture' => $path,
    ]);

    return redirect()->back()->with('success', 'Student added successfully!');
}



   
    
}



