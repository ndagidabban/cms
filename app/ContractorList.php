<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractorList extends Model
{
    protected $table = "contractor_lists";

    protected $fillable = ['company', 'address', 'speciality', 'year', 'received', 'person', 'name', 'mobile', 'cac', 'maa', 'tcc','pencom', 'itf', 'nsitf', 'bpp', 'swn', 'eqm', 'sim', 'profile', 'staff', 'audited', 'capability', 'sign', 'comment'];
    
}

