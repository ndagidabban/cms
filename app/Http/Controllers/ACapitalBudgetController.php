<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ACapitalBudget;

class ACapitalBudgetController extends Controller
{

    public function __construct() 
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $acapitalbudgets = ACapitalBudget::all();

        return view('nmd.acapitalbudget', compact('acapitalbudgets'));
    }

    public function register(Request $request)
    {
        $rules = [
            'zone'=> 'required|string',
            'state'=> 'required|string',
            'name' => 'required|string',
            'code'=> 'required|string',
            'range'=> 'required|string',
            'amount'=> 'required|double',
            'speciality'=> 'required|string',
            'status' => 'required|string'
        ];

        //$this->validate($request, $rules);
        
        ACapitalBudget::create($request->all());

        return redirect('acapitalbudget');
    }

   

public function search(Request $request)
{

    $columns = ['zone', 'state', 'speciality', 'range'];
    $model = new ACapitalBudget();
    $acapitalbudgets = $this->searchHelper($request, $model, $columns);
    return view('nmd.acapitalbudget', compact('acapitalbudgets'));
}

private function searchHelper($request, $model, $columns = [])
{
   //dd($request->all());

    if ($request->has('state') && $request->get('state') == 'ALL') {
       return $this->searchByAllState($request->get('zone'), $model);
    }

    //search by speciality
    if ($request->get('zone') == NULL && $request->get('state')== '---' 
        && $request->get('range')== NULL && $request->get('speciality') != NULL )  {

        return $this->searchBySpeciality($request->get('speciality'), $model);
    }

    //search by range
    if ($request->get('zone') == NULL && $request->get('state')== '---' 
         && $request->get('speciality') == NULL && $request->get('range') != NULL)  {
        
        return $this->searchByRange($request->get('range'), $model);
    }


    foreach($columns as $column) {
        if ($request->has($column) && $request->get($column) != null ) {
            $model = $model->where($column, $request->get($column));
        }
    }

    $seachresults = $model->get();
    return $seachresults;
}

private function searchByAllState($zone, $model) {
    $model = $model->where('zone', $zone)->get();
    return $model;
}

private function searchBySpeciality($speciality, $model) {
    $model = $model->where('speciality', $speciality)->get();
    return $model;
}

private function searchByRange($range, $model) {
    $model = $model->where('range', $range)->get();
    return $model;   
}

}