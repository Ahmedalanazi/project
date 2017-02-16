<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomCoordinatorController extends Controller
{
     public function home(){
    	return view('roomcoordinator.roomcoordinator');
    }
}
