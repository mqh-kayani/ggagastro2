<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request){

        $products = Product::with(['category','medias'])
            ->orderBy('created_at','desc')
            ->limit(10)->get();

        return view('frontend.index',compact('products'));
    }
    public function allProductByCategory($id){
        $categories = Category::all();
        $products = Product::with(['medias','category','tags'])
            ->where('category_id','=',$id)
            ->orderBy('created_at','desc')
            ->paginate(6);
        return view('frontend.product.all-products',compact('products','categories'));
    }
    public function clothingCollection(){
        $categories = Category::with('products')->get();
        $clothing = 'Clothing';
        $products = Product::whereHas('category',function ($c) use ($clothing){
            $c->where('name','=',$clothing);
        })->orderBy('created_at','desc')->paginate(6);
        return view('frontend.product.all-products',compact('products','categories'));

//        $clothing_collection = Collection::with(['category','products'])->whereHas('category',function ($c) use ($clothing){
//            $c->where('name','=',$clothing);
//        })->orderBy('created_at','desc')->get();
//        return view('frontend.product.product-collection',compact('categories','clothing_collection'));
    }
    public function handbagsCollection(){
        $categories = Category::with('products')->get();
        $handbags = 'Handbags';
        $products = Product::whereHas('category',function ($c) use ($handbags){
            $c->where('name','=',$handbags);
        })->orderBy('created_at','desc')->paginate(6);
        return view('frontend.product.all-products',compact('products','categories'));
//        $clothing_collection = Collection::with(['category','products'])->whereHas('category',function ($c) use ($handbags){
//            $c->where('name','=',$handbags);
//        })->orderBy('created_at','desc')->get();
        return view('frontend.product.product-collection',compact('categories','clothing_collection'));
    }
    public function shoesCollection(){
        $categories = Category::with('products')->get();
        $shoes = 'Shoes';
        $products = Product::whereHas('category',function ($c) use ($shoes){
            $c->where('name','=',$shoes);
        })->orderBy('created_at','desc')->paginate(6);
        return view('frontend.product.all-products',compact('products','categories'));
//        $clothing_collection = Collection::with(['category','products'])->whereHas('category',function ($c) use ($shoes){
//            $c->where('name','=',$shoes);
//        })->orderBy('created_at','desc')->get();
//        return view('frontend.product.product-collection',compact('categories','clothing_collection'));
    }
    public function accessoriesCollection(){
        $categories = Category::with('products')->get();
        $accessories = 'Accessories';
        $products = Product::whereHas('category',function ($c) use ($accessories){
            $c->where('name','=',$accessories);
        })->orderBy('created_at','desc')->paginate(6);
        return view('frontend.product.all-products',compact('products','categories'));
//        $clothing_collection = Collection::with(['category','products'])->whereHas('category',function ($c) use ($accessories){
//            $c->where('name','=',$accessories);
//        })->orderBy('created_at','desc')->get();
//        return view('frontend.product.product-collection',compact('categories','clothing_collection'));
    }
    public function thankYou(){
        $categories = Category::with('products')->get();
        return view('frontend.product.thank-you',compact('categories'));
    }
    public function homeSearch(Request $request){
        $keyword = $request->input('keyword');
        if($keyword != null){
            $products = Product::with(['medias','category'])
                ->where('name', 'like', '%' . $keyword . '%')
                ->get();
            return view('frontend.product.all-products',compact('products'));
        }else{
            $products = Product::with(['medias','category'])
                ->inRandomOrder()
                ->orderBy('created_at','desc')
                ->get();
            return view('frontend.product.all-products',compact('products'));
        }
    }

}
