<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	public static function getAllCars(){
		return self::get();
	}

	public static function getSingleCar($id){
		return self::find($id);;


	}
}
