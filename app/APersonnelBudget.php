<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class APersonnelBudget extends Model
{
    protected $table = "a_personnel_budgets";
    
    protected $fillable = ['name', 'code', 'amount', 'status', 'range', 'speciality'];
}
