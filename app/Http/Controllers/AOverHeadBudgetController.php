<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AOverHeadBudget;

class AOverHeadBudgetController extends Controller
{

    public function index()
    {
        $aoverheadbudgets = AOverHeadBudget::all();
        return view('nmd.aoverheadbudget', compact('aoverheadbudgets'));
    }

    public function register(Request $request)
    {
        AOverHeadBudget::create($request->except('_token'));

        return redirect('aoverheadbudget');
    }

    public function search(Request $request)
    {
        $columns = ['speciality', 'range', 'status'];
        $model = new AOverHeadBudget();
        $aoverheadbudgets = $this->searchHelper($request, $model, $columns);
        return view('nmd.aoverheadbudget', compact('aoverheadbudgets'));
    }
    
    private function searchHelper($request, $model, $columns = [])
    {
        foreach($columns as $column) {
            if ($request->has($column) && $request->get($column) != null) {
                $model = $model->where($column, $request->get($column));
            }
        }
        $seachresults = $model->get();
        return $seachresults;
    }
    
    }

   /* public function search(Request $request)
    {
        $overheadbudgets = OverHeadBudget::where('speciality', 
        $request->get('speciality'))->where('range',
         $request->get('range'))->where('status', $request->get('status'))->get();

        return view('nmd.overheadbudget', compact('overheadbudgets'));
    }
}
