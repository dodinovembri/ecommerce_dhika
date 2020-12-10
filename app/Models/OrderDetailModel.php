<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    public $table ='order_detail';
    public $guarded ='[]';

    public function product()
    {
    	return $this->belongsTO(ProductModel::class, 'product_id');
    }
}
