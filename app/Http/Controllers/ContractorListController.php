<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContractorList;

class ContractorListController extends Controller
{    
            public function __construct() 
            {
                $this->middleware(['auth']);
            }
            
            public function index()
            {
                $contractorlists = ContractorList::all();
        
                return view('nmd.contractorlist', compact('contractorlists'));
            }
        
            public function register(Request $request)
            {
                $rules = [
                    'company'=> 'required|string',
                    'address'=> 'required|string',
                    'speciality' => 'required|string',
                    'year'=> 'required|string',
                    'person'=> 'required|string',
                    'mobile'=> 'required|double',
                    'cac'=> 'required|string',
                    'maa' => 'required|string',
                    'tcc'=> 'required|string',
                    'pencom'=> 'required|string',
                    'itf'=> 'required|string',
                    'nsitf'=> 'required|string',
                    'bpp'=> 'required|string',
                    'swn'=> 'required|string',
                    'eqm'=> 'required|string',
                    'sim'=> 'required|string',
                    'profile'=> 'required|string',
                    'staff'=> 'required|string',
                    'audited'=> 'required|string',
                    'capability'=> 'required|string',
                    'sign'=> 'required|string',
                    'comment'=>'required|string'

                ];
        
                //$this->validate($request, $rules);
                
                ContractorList::create($request->all());
        
                return redirect('contractorlist');
            }

        
    public function search(Request $request)
        {

    $columns = ['company', 'address', 'speciality', 'mobile'];
    $model = new ContractorList();
    $contractorlists = $this->searchHelper($request, $model, $columns);
    return view('nmd.contractorlist', compact('contractorlists'));
}

private function searchHelper($request, $model, $columns = [])
{
   //dd($request->all());

    if ($request->has('state') && $request->get('state') == 'ALL') {
       return $this->searchByAllState($request->get('zone'), $model);
    }

    //search by speciality
    if ($request->get('company') == NULL && $request->get('address')== '---' 
        && $request->get('mobile')== NULL && $request->get('speciality') != NULL )  {

        return $this->searchBySpeciality($request->get('speciality'), $model);
    }

    //search by range
    if ($request->get('company') == NULL && $request->get('address')== '---' 
         && $request->get('speciality') == NULL && $request->get('mobile') != NULL)  {
        
        return $this->searchByRange($request->get('mobile'), $model);
    }


    foreach($columns as $column) {
        if ($request->has($column) && $request->get($column) != null ) {
            $model = $model->where($column, $request->get($column));
        }
    }

    $seachresults = $model->get();
    return $seachresults;
}

private function searchByAllState($company, $model) {
    $model = $model->where('company', $company)->get();
    return $model;
}

private function searchBySpeciality($speciality, $model) {
    $model = $model->where('speciality', $speciality)->get();
    return $model;
}

private function searchByRange($mobile, $model) {
    $model = $model->where('mobile', $mobile)->get();
    return $model;   
}

}