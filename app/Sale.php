<?php

namespace App;


use App\Client;
use App\User;
use App\saleDetail;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
     protected $fillable = [
    	'user_id',
    	'client_id',
    	'sale_date',
    	'iva',
    	'total',
    	'status'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function client()
    {
    	return $this->belongsTo(Client::class);
    }

    public function saleDetaill()
    {
    	return $this->hasMany(saleDetail::class);
    }
}
