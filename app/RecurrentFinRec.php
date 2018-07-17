<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecurrentFinRec extends Model
{
    protected $table = "recurrent_fin_recs";
    
    protected $fillable = ['zone', 'state', 'name', 'code', 'company', 'range', 'amount', 'speciality', 'remarks'];
}
