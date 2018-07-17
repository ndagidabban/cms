<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OverHeadBudget extends Model
{
    protected $table = 'over_head_budgets';

    protected $fillable =['name', 'code', 'amount', 'status', 'range', 'speciality'];
    
}
