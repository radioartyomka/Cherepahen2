<?php

namespace App\Http\Controllers;

use App\Room;

class RoomController extends Controller
{
    public function getIndex($url=null){
		
		return view('room', compact('url'));
	}
	public function getStart(){
		
		$obj = new Room;
		$obj->user_ip_first = $_SERVER['REMOTE_ADDR'];
		$obj->user_ip_second = '';
		$obj->status = 'new';
		$obj->user_id = 0;
		$obj->save();
	return redirect('/room/'.$obj->id);
		
	}
}
