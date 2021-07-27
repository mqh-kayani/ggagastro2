<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'category_id','collection_id','tag_id','name','price','size','video','description','color','is_available','is_featured','slug'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function medias(){
        return $this->hasMany(Media::class);
    }
    public function carts(){
        return $this->hasMany(Cart::class);
    }
    public function cartItem(){
        return $this->hasOne(CartItem::class);
    }
    public function collection(){
        return $this->belongsTo(Collection::class);
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
