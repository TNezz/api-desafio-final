<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    //Definición de función mostrar todo usando la clase Product
    public function getAll(){
        $products = Product::all();
        return $products;
    }

    //Definición de función agregar usando la clase Product
    public function add(Request $request){
        $product = Product::create($request->all());
        return $product;
    }

    //Definición de función mostrar por id usando la clase Product 
    public function get($_id){
        $product = Product::find($_id);
        return $product;
    }

    //Definición de función editar usando la clase Product
    public function edit($_id, Request $request){
        $product = $this->get($_id);
        $product -> fill($request->all())->save();
        return $product;
    }

    //Definición de función borrar usando la clase Product
    public function delete($_id){
        $product = $this->get($_id);
        $product-> delete();
        return $product;
    }
}
