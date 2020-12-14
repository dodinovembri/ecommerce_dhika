<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryModel extends Model
{
    public $table ='product_category';
    public $guarded ='[]';

    public function product()
    {
    	return $this->hasMany(ProductModel::class, 'product_category_id');
    }
}
