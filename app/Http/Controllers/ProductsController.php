<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function getAll(){
        $products = Product::all();
        return $products;
    }

    public function add(Request $request){
        $product = Product::create($request->all());
        return $product;
    }

    public function get($_id){
        $product = Product::find($_id);
        return $product;
    }

    public function edit($_id, Request $request){
        $product = $this->get($_id);
        $product -> fill($request->all())->save();
        return $product;
    }

    public function delete($_id){
        $product = $this->get($_id);
        $product-> delete();
        return $product;
    }
}
