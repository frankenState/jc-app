<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    public function products()
    {
    	return $this->hasMany('App\Products', 'type_id','id');
    }
}
