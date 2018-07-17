<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapitalBudget extends Model
{
    protected $table = "capital_budgets";

    protected $fillable = ['zone', 'state', 'name', 'code', 'amount', 'status', 'range', 'speciality'];


}
