<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // $products = DB::table('products')->get();
        $pageSize = $request->pageSize ?? 10;
        $products = Product::paginate($pageSize);
        return view('admin.products.index', compact('products'));
    }
}
