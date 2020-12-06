<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartDetailModel extends Model
{
    public $table ='cart_detail';
    public $guarded ='[]';

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }

    public function product_stock()
  	{
  		return $this->belongsTo(ProductStockModel::class, 'product_id');	
  	}    
}
