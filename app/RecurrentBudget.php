<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecurrentBudget extends Model
{
    protected $table = "recurrent_budgets";

    protected $fillable = ['zone', 'state', 'name', 'code', 'amount', 'status', 'range', 'speciality'];


}
