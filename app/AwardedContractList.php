<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AwardedContractList extends Model
{
    protected $table = "awarded_contract_lists";
    
    protected $fillable = ['company', 'name', 'code', 'range', 'amount', 'speciality', 'status'];
}

