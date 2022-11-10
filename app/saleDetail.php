<?php

namespace App;

use App\Sale;
use Illuminate\Database\Eloquent\Model;

class saleDetail extends Model
{
    protected $fillable = [ 

		'sale_id',
		'product_id',
		'quantity',
		'price',
		'discount'
	];

 

  public function product()
  {
  	return $this->belongsTo(Product::class);
  }
}
