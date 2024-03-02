<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Generator\Method;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Student $students)
    {
        
        return view('students.index');
    }

    public function create()
    {
        return view('students.create');
    }
}
