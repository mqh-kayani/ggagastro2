<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id','order_no',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cart(){
        return $this->hasOne(Cart::class);
    }
    public function invoice(){
        return $this->hasOne(Invoice::class);
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
