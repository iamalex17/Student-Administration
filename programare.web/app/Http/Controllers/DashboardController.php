<?php

namespace App\Http\Controllers;

use App\Student;
use App\StudentsClass;
use App\StudentsGrade;
use Illuminate\Http\Request;
use App\Http\Requests;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $classes = StudentsClass::all();
        $grades = StudentsGrade::all();

        return view('studentsGrades', [
            'students' => $students,
            'classes'  => $classes,
            'grades'   => $grades
        ]);
    }
}
