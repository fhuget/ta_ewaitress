<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

        protected $primaryKey = 'order_id';

        protected $guarded = [];

        public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
    public function delivery()
    {
        return $this->belongsTo('App\Models\Delivery', 'delivery_id');
    }
    
}
