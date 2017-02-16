<?php

namespace App\Http\Controllers;

use App\Department;

//use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index(){

    	$departments = Department::all();

    	//return $categories;

    	return view('Departments.index')->with('departments', $departments);
    	//return view('categories.index', compact('categories'));

    }

   public function create(){

    	return view('departments.create');
    }

    public function store(){

    	$input = Request::all();

    	Department::create($input);

    	return redirect('departments\index');


    	//return $input;
    }

}
