<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bbc_user extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
