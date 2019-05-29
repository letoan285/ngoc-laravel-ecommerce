<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getCateName($id)
    {
        $cate = Category::find($id);
        if(!$cate){
            return 'Chua co danh muc';
        } else {
            return $cate->name;
        }
    }
}
