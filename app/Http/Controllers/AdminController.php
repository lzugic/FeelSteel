<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;


class AdminController extends Controller
{
    use AuthenticatesUsers;

    
//--Users--//
    public function Admin(){
        $orders = Order::all()->count();
        $users = User::all()->count();

        return view('admin/dashboard')->with(['orders'=>$orders, 'users'=>$users]);
    }

    public function Data(){
        $users = User::all();

        return view('admin/data')->with('users', $users);
    }

    public function roleEdit(Request $req, $id){
        $users = User::findOrFail($id);

        return view('admin/role-edit')->with('users', $users);

    }

    public function roleUpdate(Request $req, $id){
        $users = User::find($id);
        $users->name = $req->input('name');
        $users->email = $req->input('email');
        $users->is_admin = $req->input('is_admin');
        $users->update();

       return redirect('../public/admin/data');

    }

    public function roleDelete($id){

        $users = User::findOrFail($id);
        $users->delete();
        
        return redirect('../public/admin/data');
    }

    public function addUser(){
        return view('admin/add-user');
    }

    public function saveUser(Request $req){
        $users = new User;
    
        $users->name = $req->input('name');
        $users->email = $req->input('email');
        $users->is_admin = $req->input('is_admin');
        $users->password = Hash::make($req->input('password'));
        $users->save();
    
        return redirect('admin/data');
    }
//--Products--//
public function productTable(){
    $products = Product::all();
    $categories = Category::all();

    return view('admin/product-table')->with(['products'=>$products, 'categories'=>$categories]);
}

public function productEdit(Request $req, $id){
    $products = Product::findOrFail($id);

    return view('admin/product-edit')->with('products', $products);

}

public function productDelete($id){

    $products = Product::findOrFail($id);
    $products->delete();
    
    return redirect('../public/admin/product-table');
}

public function productUpdate(Request $req, $id){
    $products = Product::find($id);
    $products->name = $req->input('name');
    $products->price = $req->input('price');
    $products->category = $req->input('category');
    $products->description = $req->input('description');
    $products->galery = $req->input('galery');

    $products->update();

   return redirect('../public/admin/product-table');

}

public function addProduct(){
    $categories = Category::all();

    return view('admin/add-product')->with('categories', $categories);
}

public function saveProduct(Request $req){
    $categories = Category::all();
    $products = new Product;

    $products->name = $req->input('name');
    $products->price = $req->input('price');
    $products->category = $req->input('category_id');
    $products->description = $req->input('description');
    $products->galery = $req->input('galery');

    $products->save();


    $products->categories()->attach($req->input('category_id'));

    return redirect('admin/product-table');
}


//--Orders--//
public function orderTable(){
    $orders = Order::all();

    return view('admin/order-table')->with('orders', $orders);
}

public function orderDelete($id){

    $orders = Order::findOrFail($id);
    $orders->delete();
    
    return redirect('../public/admin/order-table');
}


//--Calendar--//
public function Calendar(){

    return view('admin/calendar');
}



//--Category--//
public function categoryTable(){
    $categories = Category::all();

    return view('admin/category-table')->with('categories', $categories);
    
}

public function categoryEdit(Request $req, $id){
    $categories = Category::findOrFail($id);

    return view('admin/category-edit')->with('categories', $categories);
}

public function categoryUpdate(Request $req, $id){
    $categories = Category::find($id);
    $categories->name = $req->input('name');
    $categories->slug = $req->input('slug');
    $categories->image = $req->input('image');
    $categories->update();

    return redirect('admin/category-table');
}

public function categoryDelete($id){
    $categories = Category::findOrFail($id);
    $categories->delete();

    return redirect('../public/admin/category-table');
}

public function addCategory(){

    return view('admin/add-category');
}

public function saveCategory(Request $req){
    $categories = new Category;

    $categories->name = $req->input('name');
    $categories->slug = $req->input('slug');
    $categories->image = $req->input('image');

    $categories->save();

    return redirect('admin/category-table');
}

//--Auth--//
    public function __construct()
    {
        $user = Session::get('user')['is_admin'];

        if($user == false){
            $this->middleware('auth');

        }else{

            return view('admin/dashboard');
        }
    }

}
