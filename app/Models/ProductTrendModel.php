<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTrendModel extends Model
{
    public $table ='product_trend';
    public $guarded ='[]';

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }  

    public function product_category()
    {
        return $this->belongsTo(ProductCategoryModel::class, 'product_category_id');
    }         
}
