<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;

class PersonsController extends Controller{

    public function create(Request $request){
        $data = new Persons;
        $data->document_type_id = (int)$request['document_type_id'];
        $data->document = $request['document'];
        $data->name = $request['name'];
        $data->lastname = $request['last_name'];
        $data->fullname = $data->name." ".$data->lastname;
        $data->birthday = $request['birthday'];   
        echo(date_parse($request['birthday']));
        $data->email = $request['email'];
        $data->sex = $request['sex'];
        $data->address = $request['address'];
        $data->country = $request['country'];
        $data->city = $request['city'];
        $data->ubigeo = $request['ubigeo'];
        $data->save();
        return response()->json($data->fullname);
    }
}