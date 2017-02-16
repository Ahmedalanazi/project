<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Student;
use Request;

class StudentController extends Controller
{
  


    public function index(){

    	$students = Student::all();

    	//return $categories;

    	return view('students.index')->with('students', $students);
    	//return view('categories.index', compact('categories'));

    }


    // public function show($id) {

    // 	$students = Student::find($id);

    // 	return view('students.show')->with('students', $category);
    // }



    public function create(){

    	return view('students.create');
    }

    public function store(){

    	$input = Request::all();

    	Student::create($input);

    	return redirect('students\index');

    }
}
