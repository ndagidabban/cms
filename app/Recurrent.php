<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurrent extends Model
{
    protected $table = "recurrent";

    protected $fillable = ['zone', 'state', 'name', 'code', 'amount', 'status', 'range', 'speciality'];


}
