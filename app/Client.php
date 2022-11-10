<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
    	'name',
    	'dni',
    	'cuil',
    	'address',
    	'email',
    	'phone'
    ];
}
