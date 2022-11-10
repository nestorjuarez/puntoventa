<?php

namespace App;


use App\Product;
use App\Purchase;
use App\User;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
	protected $fillable = [ 

		'puchase_id',
		'product_id',
		'quantity',
		'price'
	];



	public function puchase()
	{
		return $this->belongsTo(Purchase::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
