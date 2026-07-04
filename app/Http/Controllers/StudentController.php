<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('index',compact('student'));
    }
    public function store(Request $request){

    // dd($request->all());
        $request->validate([
        'name'    => 'required',
        'email'   => 'required|email',
        'phone'   => 'required',
        'rool'    => 'required',
        'address' => 'required',
    ]);


    $student = new student;

    $student->name = $request->name;
    $student->email = $request->email;
    $student->phone = $request->phone;
    $student->rool = $request->rool;
    $student->address = $request->address;

    $student->save();

    return redirect('/student');

    }
}
