<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Repositories\Category\CategoryInterface;

class CategoryController extends Controller
{
    protected $model;

    public function __construct(CategoryInterface $categories)
    {
        $this->model = $categories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->model->getAll();
        // return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = $this->model->getAll();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $category = new Category();

        // $category->name = $request->name;
        // $category->slug = Str::slug($request->name, '-').'.html';
        // $category->image = $request->image;
        // $category->parent_id = $request->parent_id;
        // $category->status = $request->status;

        // if($category->save()){
        //     return redirect()->route('categories.index');
        // } else {
        //     return 'Insert Fail';
        // }
       return $this->model->create($request->only($this->model->getModel()->fillable));
        // $this->model->create($request->all());
        //return redirect()->route('categories.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->model->getById($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
