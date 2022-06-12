<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurants;

class RestaurantsController extends Controller{

    public function create(Request $request){
        $restaurant = new Restaurants;
        $message = 'Error';
        if($request != null){
            $restaurant->ruc=$request['ruc'];
            $restaurant->name=$request['name'];
            $restaurant->description=$request['description'];
            $restaurant->address=$request['address'];
            $restaurant->state=1;
            $restaurant->save();
            $message = 'Successfully';
        }   
        return response($message);
    }

    public function update(Request $request){
        $restaurant = Restaurants::find($request->id);
        $message = 'Error';
        if($request != null){
            $restaurant->name=$request['name'];
            $restaurant->description=$request['description'];
            $restaurant->address=$request['address'];
            $restaurant->save();
            $message = 'Successfully';
        }   
        return response($restaurant);
    }

    public function find($id){
        $data = Restaurants::find($id);
        return response()->json($data);
    }

    public function allRestaurants(){
        $data = Restaurants::all();
        return response()->json($data);
    }

}