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

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:students,email',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('students', 'public');
        }

        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'profile_picture' => $path,
            'is_verified' => false,
            'verification_token' => Str::random(40),
        ]);

        // ✅ Logging
        Log::info('New student added', ['id' => $student->id, 'email' => $student->email]);

        // ✅ Session flash message
        session()->flash('success', 'Student added successfully!');

        return redirect()->route('students.index');
    }



   
    
}



