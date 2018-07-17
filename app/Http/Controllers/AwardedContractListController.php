<?php

namespace App\Http\Controllers;

use App\AwardedContractList;

use Illuminate\Http\Request;

class AwardedContractListController extends Controller
{
    public function __construct() 
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $awardedcontractlists = AwardedContractList::all();

        return view('nmd.awardedcontractlist', compact('awardedcontractlists'));
    }

    public function register(Request $request)
    {
        $rules = [
            'comapny'=> 'required|string',
            'name'=> 'required|string',
            'code' => 'required|string',
            'range'=> 'required|string',
            'amount'=> 'required|string',
            'speciality'=> 'required|string',
            'status' => 'required|string'
        ];

        //$this->validate($request, $rules);
        
        AwardedContractList::create($request->all());

        return redirect('awardedcontractlist');
    }

    
public function search(Request $request)
    {

    $columns = ['company', 'speciality', 'mobile', 'year'];
    $model = new AwardedContractList();
    $awardedcontractlists = $this->searchHelper($request, $model, $columns);
    return view('nmd.awardedcontractlist', compact('awardedcontractlists'));
}

private function searchHelper($request, $model, $columns = [])
{
   

    //search by company name
    if ($request->get('company') == NULL && $request->get('speciality')== '---' 
        && $request->get('mobile')== NULL && $request->get('year') != NULL )  {

        return $this->searchBySpeciality($request->get('company'), $model);
    }

    //search by speciality
    if ($request->get('company') == NULL && $request->get('speciality')== '---' 
         && $request->get('mobile') == NULL && $request->get('year') != NULL)  {
        
        return $this->searchByRange($request->get('speciality'), $model);
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

private function searchBySpeciality($mobile, $model) {
    $model = $model->where('mobile', $mobile)->get();
    return $model;
}

private function searchByRange($year, $model) {
    $model = $model->where('year', $year)->get();
    return $model;   
}

}
