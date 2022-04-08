<?php

namespace App\Http\Controllers;
use App\Models\product;

use Illuminate\Http\Request;

class productControllerAPI extends Controller
{
    public function productList(){
        $products = Product::all();
        return $products;
    }
}
