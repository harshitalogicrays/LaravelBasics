<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index(){
        $products=["product1","product2","product3","product4"];
        $productdata = array(101=>array(
            "name" => "Red Shirt",
            "img" => "images/b.jpg",
            "price" => 18
        ),102=>array(
            "name" => "Black Shirt",
            "img" => "images/a.jpg",
            "price" => 20
        ),103=>array(
            "name" => "Black Shirt",
            "img" => "images/d.jpg",
            "price" => 20
        ));
        $data=compact('products','productdata');
        return view('products')->with($data);
    }    

    public function anonymous(){
        $products=["product1","product2","product3","product4"];
        return view('productAnonymous')->with(['products'=>$products]);
    }
}
