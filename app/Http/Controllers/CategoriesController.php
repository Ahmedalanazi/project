<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Category;
use Request;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\RegistersUsers;

class CategoriesController extends Controller
{
    //

    public function index(){

    	$categories = Category::all();

    	//return $categories;

    	return view('categories.index')->with('categories', $categories);
    	//return view('categories.index', compact('categories'));

    }


    public function show($id) {

    	$category = Category::find($id);

    	return view('categories.show')->with('category', $category);
    }



    public function create(){

    	return view('categories.create');
    }

    public function store(){

    	$input = Request::all();

    	Category::create($input);

    	return redirect('categories\index');


    	//return $input;
    }

 }
