<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Car;

class CarsController extends Controller
{
	protected function index(){
		$cars = Car::getAllCars();
		return view('cars.index',compact("cars"));
	}

	protected function show($id){
		$car = Car::getSingleCar($id);
		return view('cars.show',compact("car"));
	}

	protected function about(){
		return view('cars.about');
	}
}
