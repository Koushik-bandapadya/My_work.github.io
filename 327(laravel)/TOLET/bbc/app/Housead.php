<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Housead extends Model
{
    
    protected $fillable = [
        'title','cost',	'area',	'pic',	'bed',	'bath',	'size',
    ];
}
