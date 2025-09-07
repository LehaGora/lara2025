<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

class CarController extends Controller
{
    public function monthlyRevenue()
    {
        return Car::all()->count();
    }

    public function index(Request $request, $id, $ip): View
    {

        //$cars = Car::all();

        $find = $request->id;
        // dd($find);
        $model = $request->query('model');

        // $cars = $cars->reject(function (Car $car) {
        //     return $car->year < 1973;
        // });

        // $newCar = new Car;
        // $newCar->marka = 'qwerty';
        // $newCar->model = 'qwerty';
        // $newCar->year = '2025';
        // $newCar->vin = 'qwerty';
        // $newCar->save();

        //$car = Car::find($find);
        //$car->delete();

        //Car::destroy($find, $find+1, $find+2);



        $cars = Car::all();

        // $cars = $cars->reject(function (Car $car) {
        //     return $car->id <  100;
        // });

        // $user = Car::first();

        // dd($user->toJson());

        $message = 'Message';

        return view( 'cars', compact('cars', 'id', 'ip', 'find', 'model', 'message') );
    }
}
