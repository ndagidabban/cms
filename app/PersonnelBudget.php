<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelBudget extends Model
{
    protected $table = "personnel_budgets";
    
    protected $fillable = ['name', 'code', 'amount', 'status', 'range', 'speciality'];
}
