<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personals;
use App\Http\Controllers\PersonsController;

class PersonalsController extends Controller{
    
    public function create(Request $request){
        $personal = new Personals;
        $persons_id = (new PersonsController)->create($request->person)->id;
        $personal->persons_id = $persons_id;
        $personal->personal_type_id = $request['personal_type_id'];
        $personal->salary_day = $request['salary_day'];
        $personal->contract_at = $request['contract_at'];
        $personal->renovation_at = $request['renovation_at'];
        $personal->final_contract_at = $request['final_contract_at'];
        $personal->state = 1;
        $personal->save();
        return response('Susccessfully');
    }

}