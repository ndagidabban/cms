<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ARecurrent extends Model
{
    protected $table = "a_recurrent";

    protected $fillable = ['zone', 'state', 'name', 'code', 'amount', 'status', 'range', 'speciality'];


}
