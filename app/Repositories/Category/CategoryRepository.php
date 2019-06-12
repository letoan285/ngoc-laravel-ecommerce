<?php 
namespace App\Repositories\Category;

use App\Models\Category;

class CategoryRepository implements CategoryInterface {

    protected $model;

    public function __construct(Category $model){
        $this->model = $model;
    }
    public function getAll()
    {
        $pageSize = $request->pageSize ?? 10 ;
        return $this->model->paginate($pageSize);
    }
    public function getById($id)
    {
        return $this->model->find($id);
    }
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }
    public function update(array $attributes, $id)
    {
        return $this->model->find($id)->update($attributes);
        
    }
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }
}