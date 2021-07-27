<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function allProducts(){
        $products = Product::with(['medias','category'])
            ->inRandomOrder()
            ->orderBy('created_at','desc')
            ->get();
        return view('frontend.product.all-products',compact('products'));
    }
    public function singleProduct($slug){
        $product = Product::with(['medias','category'])
            ->where('slug','=',$slug)
            ->firstOrFail();
        return view('frontend.product.single-product',compact('product'));
    }

    public function checkout(){
        $userId = auth()->user()->id;
        $cart =\Cart::session($userId)->getContent();
        $subTotal = \Cart::session($userId)->getSubTotal();
        $shipping_detail = Shipping::with('user')->where('user_id','=',auth()->user()->id)->latest()->firstOrFail();
        return view('frontend.product.checkout',compact('shipping_detail','cart','subTotal'));
    }
}
