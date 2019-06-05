<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getParentName($id)
    {
        $cate = Category::find($id);
        if(!$cate) {
            return 'Danh muc goc';
        } else {
            return $cate->name;
        }
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
