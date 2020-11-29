<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    public $table ='product';
    public $guarded ='[]';

    public function product_category()
    {
        return $this->belongsTo(ProductCategoryModel::class, 'product_category_id');
    }     
}
