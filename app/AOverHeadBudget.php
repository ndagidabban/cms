<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AOverHeadBudget extends Model
{
    protected $table = 'a_over_head_budgets';

    protected $fillable =['name', 'code', 'amount', 'status', 'range', 'speciality'];
    
}
