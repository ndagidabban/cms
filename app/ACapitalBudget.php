<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ACapitalBudget extends Model
{
    protected $table = "a_capital_budgets";

    protected $fillable = ['zone', 'state', 'name', 'code', 'amount', 'status', 'range', 'speciality'];


}
