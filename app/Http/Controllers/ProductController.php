<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function index(){
        
        if(request()->category){
            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('slug', request()->category);
            
            })->get();
            $categories = Category::all();
        }else{
        
        $data = Product::inRandomOrder()->take(14)->get();
        $categories = Category::all();
        }

        return view('product')->with(['categories'=> $categories, 'products'=> $data ]);
    }



    function details($id){
        $data = Product::where('id', $id)->FirstOrFail();

        return view('details')->with(['product'=> $data]);
    }

    function search(Request $req){
        $data = Product::where('name','like', '%'.$req->input('query').'%')->get();
        return view('search', ['products'=> $data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            
            return redirect('cartlist');

        }else{
            return redirect('/login');
        }
    }

    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartList(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=> $products]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow(){
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('cart')
        ->join('products', 'cart.product_id', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');

        return view('ordernow',['total'=> $total]);
    }
    function orderPlace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "Neresen";
            $order->fname = $req->fname;
            $order->lname = $req->lname;
            $order->address = $req->address;
            $order->number = $req->number;
            $order->save();
            Cart::where('user_id', $userId)->delete();

        }
        $req->input();
        return redirect('thankyou');

    }
    function myOrder(){
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products', 'orders.product_id', 'products.id')
        ->where('orders.user_id', $userId)
        ->get();

        return view('myorder',['orders'=> $orders]);
    }

    function orderList(){
        $orders = DB::table('orders')
        ->join('products', 'orders.product_id', 'products.id')
        ->get();

        return view('orderlist', ['orders'=> $orders]);

    }

    function thankYou(){
        $userId = Session::get('user')['id'];
        return view('thankyou');

    }

    function Shop(){

         if(request()->category){
             $products = Product::with('categories')->whereHas('categories', function($query){
                 $query->where('slug', request()->category);
             })->get();

         $categories = Category::all();
         $categoryName = $categories->where('slug', request()->category)->first()->name;

        // if(request()->category){

        //     $categories = Category::all();
        //     $categoryName = $categories->where('slug', request()->category)->first()->name;

        //     $products = Product::where('category')->whereHas('categories', function ($q) use ($categories) {
        //         $q->where('slug', $categories);
        //   })->get();
          


        }else{
        $products = Product::all();
        $categories = Category::all();
        $categoryName = "Svi Proizvodi";

        }

        if(request()->sort == 'low_high'){
            $products = $products->sortBy('price');

        }elseif(request()->sort == 'high_low'){
            $products = $products->sortByDesc('price');

        }

        return view('shop')->with(['categories'=> $categories, 'products'=> $products, 'categoryName'=>$categoryName ]);
    }

    function dashBoard(){
        
        return view('admin.dashboard');
    }
    
    function Home(){

        return view('home');
    }

}
