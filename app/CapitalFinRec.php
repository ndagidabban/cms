<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapitalFinRec extends Model
{
    protected $table = "capital_fin_recs";
    
    protected $fillable = ['zone', 'state', 'name', 'code', 'company', 'range', 'amount', 'speciality', 'remarks'];
    
}
