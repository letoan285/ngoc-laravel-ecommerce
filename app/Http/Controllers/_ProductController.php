<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public $products = [
        ['id' => 1, 'name' => 'product 1'],
        ['id' => 1, 'name' => 'product 1'],
        ['id' => 1, 'name' => 'product 1']
    ];
    public function index()
    {
        $products = $this->products;
        // return $products;
        return view('admin.products.index', compact('products'));
    }
}
