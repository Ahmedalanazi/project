<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JudgeController extends Controller
{
     public function home(){
    	return view('judge.judge');
    }
}
