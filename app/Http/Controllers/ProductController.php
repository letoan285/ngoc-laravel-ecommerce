<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\SaveProduct;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $path = '';
        if(!$keyword){
            $pageSize = $request->pageSize ?? 10;
            $products = Product::paginate($pageSize);
            $path .= "?pageSize=$pageSize";
            //return view('admin.products.index', compact('products', 'keyword'));
        } else {
            $pageSize = $request->pageSize ?? 10;
            $products = Product::where('name', 'like', "%$keyword%")->orWhere('description', 'like', "%$keyword%")->paginate($pageSize);
            $path .= "?pageSize=$pageSize&keyword=$keyword";
        }
        $products->withPath($path);
        return view('admin.products.index', compact('products', 'keyword'));
    }
    public function destroy(Request $request, $id)
    {   
        //dd($request->id);
        // $product = Product::find(1);
        // if($product->delete()){
        //     return redirect()->route('products.index');
        // }
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }
    public function store(SaveProduct $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        //     'sell_price' => 'required',
        // ]);

        // if($validator->fails()){
        //     $errors = $validator->errors();

        //         //echo $errors->first('name');
        //     //dd($validator->messages()->first());
        // } else {
        //     dd('insert');
        // }
        // $this->validate(request(), [
        //     'name' => 'required|max:255',
        //     'sell_price' => 'required'
        // ]);
        $validated = $request->validated();

        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-').'.html';
        $product->sell_price = $request->sell_price;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('products.index');

    }
}
