<?php

namespace App;

use App\Category;
use App\Provider;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [

    	'code',
    	'name',
    	'stock',
    	'image',
    	'sell_price',
    	'estado',
    	'category_id',
    	'provider_id'
    ];


    public function category()
    {
    	return $this->belongsTo(Category::class)
    }

    public function provider(){
    	return $this->belongsto(Provider::class);
    }
}
