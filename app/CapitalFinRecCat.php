<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapitalFinRecCat extends Model
{
    protected $table = "capital_fin_rec_cats";
    
    protected $fillable = ['zone', 'state', 'name', 'code', 'company', 'range', 'amount', 'speciality', 'remarks'];
}
