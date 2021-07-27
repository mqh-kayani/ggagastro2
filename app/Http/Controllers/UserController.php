<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShippingDetailRequest;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Mail\InquiryMail;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Stripe;
use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Services\ExpressCheckout;
class UserController extends Controller
{

    public function signUp(){
        $categories = Category::with('products')->get();
        return view('frontend.account.sign-up',compact('categories'));
    }
    public function saveUser(SignUpRequest $request){
        $save_user = User::create([
           'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'role' => 'user',
        ]);
        if ($save_user){
            Cart::create(['user_id'=>$save_user->id]);
            auth()->login($save_user);
            return redirect()->route('home');
        }else
        {
            return redirect()->back()->with('error-msg','Something Went Wrong! Try Again');
        }
    }
    public function signIn(){
        $categories = Category::with('products')->get();
        return view('frontend.account.sign-in',compact('categories'));
    }
    public function userLogin(SignInRequest $request){
        $credentials = $request->only('email','password');

        if (auth()->attempt($credentials))
        {
            return redirect()->route('home');
        }else
        {
            return redirect()->back()->with('error-msg','Invalid Email or Password! Try Again');
        }
    }
    public function loginModal(SignInRequest $request){
        $credentials = $request->only('email','password');
        if (auth()->attempt($credentials)){
           $cart_id = auth()->user()->cart->id;
            return response()->json([
                'status' => 'success',
                'cart_id' => $cart_id
            ],200);
        }
    }
    public function addToCart(Request $request){

        $product = Product::findOrFail($request->input('product_id'));
        $userId = auth()->user()->id;
        $id = Str::random(6);
        $save_cart= \Cart::session($userId)->add(array(
            'id' => $id,
            'name' => $request->input('product_name'),
            'price' => $request->input('product_price'),
            'quantity' => $request->input('quantity'),
            'associatedModel' => $product
        ));
        if ($save_cart){
            return redirect()->route('cart');
        }else
        {
            dd('no');
        }
    }
//    public function addToCart(Request $request){
//        $product = Product::findOrFail($request->product_id);
//        $quantity = $request->quantity;
//        $total = $product->price*$quantity;
//        $sub_total = $product->price*$quantity;
//        $cart_id = $request->cart_id;
//        $add_to_cart = CartItem::create([
//            'cart_id' => $cart_id,
//            'product_id' => $request->product_id,
//            'quantity' => $quantity,
//            'total' => $total,
//            'sub_total' => $sub_total,
//        ]);
//        if ($add_to_cart){
//            return response()->json([
//                'status' => 'success'
//            ],200);
//        }else{
//            return response()->json([
//                'status' => 'fail'
//            ],500);
//        }
//    }
    public function cart(Request $request){
//        $categories = Category::all();
//        $cart = Cart::with('user','cartItems')->where('user_id','=',auth()->user()->id)->firstOrFail();
//        $total = $cart->cartItems->sum('total');
//        if (auth()->check()){
//            $userId = auth()->user()->id;
//        }else{
//            $userId = $request->ip();
//        }
        $userId = auth()->user()->id;
        $cart =\Cart::session($userId)->getContent();
        $subTotal = \Cart::session($userId)->getSubTotal();
        return view('frontend.product.cart',compact('cart','subTotal'));
    }
    public function removeCart($id){
//        $remove_cart = CartItem::findOrfail($id);
//        $remove_cart->delete();
        $userId = auth()->user()->id; // or any string represents user identifier
        \Cart::session($userId)->remove($id);
        return redirect()->back();
    }

    public function saveShippingDetails(Request $request){
        $save_shipping = Shipping::create([
           'user_id' => auth()->user()->id,
           'firstname' => $request->input('first_name'),
           'lastname' => $request->input('last_name'),
           'address' => $request->input('address'),
           'city' => $request->input('city'),
           'country' => $request->input('country'),
           'postal_code' => $request->input('postal_code'),
           'phone_no' => $request->input('phone_no'),
        ]);
        if ($save_shipping){
            return redirect()->route('checkout');
        }else
        {
            return redirect()->back()->with('error-msg','Something Went Wrong! Try Again.');
        }
    }

    public function placeOrder(Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $do_payment =Stripe\Charge::create ([
            "amount" => $request->total_amount*100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test Payment By Qamar Kayani"
        ]);
        if ($do_payment){
            $save_order = Order::create([
                'user_id' => $request->user_id,
                'order_no' => Str::random(4),
            ]);
            if ($save_order){
                $order = Order::findOrFail($save_order->id);
                $order->order_no = '#gga'.$order->id;
                $order->save();
                $userId = auth()->user()->id;
                $cart =\Cart::session($userId)->getContent();
                foreach ($cart as $item){
                    $save_order_detail = OrderDetail::create([
                        'order_id' => $order->id,
                        'user_id' => $request->user_id,
                        'product_id' => $item->associatedModel->id,
                        'shipping_id' => $request->shipping_id,
                        'quantity' => $item->quantity,
                    ]);
                }
                if ($save_order_detail){
                    \Cart::session($userId)->clear();
                }
            }
        }
        \Illuminate\Support\Facades\Session::flash('success', 'Payment has been successfully processed.');
        return redirect()->route('thankYou');
    }
    public function paypalPayment(Request $request){
        $save_order = Order::create([
            'user_id' => $request->user_id,
            'order_no' => Str::random(4),
        ]);
        if ($save_order){
            $order = Order::findOrFail($save_order->id);
            $order->order_no = '#gga'.$order->id;
            $order->save();
            $userId = auth()->user()->id;
            $cart =\Cart::session($userId)->getContent();
            foreach ($cart as $item){
                $save_order_detail = OrderDetail::create([
                   'order_id' => $order->id,
                   'user_id' => $request->user_id,
                   'product_id' => $item->associatedModel->id,
                    'shipping_id' => $request->shipping_id,
                    'quantity' => $item->quantity,
                ]);
            }
            if ($save_order_detail){
                \Cart::session($userId)->clear();
                return response()->json([
                    'status' => 'success',
                ]);
            }
        }
    }

    public function contactInquiry(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        ];
        Mail::to('info@zaidasklozet.com')->send(new InquiryMail($data));
        return redirect()->back()->with('success-mail','Contact Inquiry Sent! We Will Get Back To You Soon');
    }
    public function userLogout(){
        auth()->logout();
        return redirect()->route('home');
    }
    public function myAccount(){
        $categories = Category::all();
        $orders = Order::with('orderDetails')
            ->where('user_id','=',auth()->user()->id)
            ->orderBy('created_at','desc')->get();
        return view('frontend.account.my-account',compact('categories','orders'));
    }
    public function myOrder($id){
        $categories = Category::all();
        $order = Order::with('orderDetails')->findOrFail($id);
        return view('frontend.account.my-order',compact('categories','order'));
    }
}
