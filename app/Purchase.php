<?php

namespace App;

use App\Provider;
use App\PurchaseDetail;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
    	'user_id',
    	'provider_id',
    	'purchase_date',
    	'iva',
    	'total',
    	'status',
    	'picture'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function provider()
    {
    	return $this->belongsTo(Provider::class);
    }

    public function purchaseDetail()
    {
    	return $this->hasMany(PurchaseDetail::class);
    }
}
