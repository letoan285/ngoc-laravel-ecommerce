<?php 
namespace App\Repositories\Category;

interface CategoryInterface {
    public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update(array $attributes, $id);
    public function delete($id);
}