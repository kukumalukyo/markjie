<?php
/**
 * Created by PhpStorm.
 * User: xuqiezi
 * Date: 2017/3/28
 * Time: 下午6:01
 */

namespace app\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller {
    public function createCar(Request $request) {
        $car = Car::create($request->all());
        return response()->json($car);
    }

    public function updateCar(Request $request, $id) {
        $car = Car::find($id);
        if ($request->exists('make')) {
            $car->make = $request->input('make');
        }
        if ($request->exists('model')) {
            $car->model = $request->input('model');
        }
        if ($request->exists('year')) {
            $car->year = $request->input('year');
        }

        $car->save();
        return response()->json($car);
    }

    public function deleteCar($id) {
        $car = Car::find($id);
        $car->delete();
        return response()->json('delete successfully');
    }

    public function index() {
        $cars = Car::all();
        return response()->json($cars);
    }
}