<?php

namespace App\Http\Controllers;
use App\Models\Model\Product;
use App\Http\Resource\Product\ProductResource;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       return Product::all();
    }

    public function show(Product $product){
        return ProductResource::make($product);
    }
}
