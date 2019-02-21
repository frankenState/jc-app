<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::with('product_type')->get();
    	return $products->toJson();
    }

    public function search($key = 0)
    {

    	if ($key)
    		return $this->index();

    	$products = Product::with('product_type')
			->where('products.name','like',"%$key%")
			->get();

		return $products->toJson();
    }
}
