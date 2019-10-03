<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getIndex($url=null){
		
		return view('room', compact('url'));
	}
}
