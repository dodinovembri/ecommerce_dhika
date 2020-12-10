<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    public $table ='order_list';
    public $guarded ='[]';

    public function order_detail()
    {
        return $this->hasMany(OrderDetailModel::class, 'order_id');
    }   

    public function payment_method()
    {
    	return $this->belongsTo(PaymentMethodModel::class, 'payment_method_id');
    }
}
