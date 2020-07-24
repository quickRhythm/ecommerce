<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = ['shoppingcart_id', 'order_amount', 'bank', 'how_many_installments', 'status'];

    public function shoppingcart()
    {
        return $this->belongsTo('App\Models\ShoppingCart');
    }
}
