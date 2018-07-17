<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OverHeadBudget;

class OverHeadBudgetController extends Controller
{

    public function index()
    {
        $overheadbudgets = OverHeadBudget::all();
        return view('nmd.overheadbudget', compact('overheadbudgets'));
    }

    public function register(Request $request)
    {
        OverHeadBudget::create($request->except('_token'));

        return redirect('overheadbudget');
    }

    public function search(Request $request)
    {
        $columns = ['speciality', 'range', 'status'];
        $model = new OverHeadBudget();
        $overheadbudgets = $this->searchHelper($request, $model, $columns);
        return view('nmd.overheadbudget', compact('overheadbudgets'));
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
