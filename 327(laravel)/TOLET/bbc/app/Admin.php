<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $fillable = [
        'user_name','password', 'email','phone',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    
}
