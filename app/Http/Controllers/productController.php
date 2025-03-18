<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class productController extends Controller
{
    public function getProductAll()
    {

        // $idUser = Auth::user()->id_user;
        // dd(Auth::check(), Auth::user(), $idUser);
        $categories = ['bluss', 'make-up', 'rok', 'bag', 'dress', 'heels'];
        $productsByCategory = [];
    
        foreach ($categories as $category) {
            $productsByCategory[$category] = DB::table('products')->where('category', $category)->get();
        }
    
        // Debug untuk memastikan session terbaca
        // dd($userId, $productsByCategory);
    
        return view('product.all', compact('productsByCategory'));
    }

    public function getProductByCategory($category)
    {
        $products = DB::table('products')->where('category', $category)->get();
        return view('product.category', compact('products', 'category'));
    }

    public function getProductDetail($id)
    {

        $user = auth()->user();
    
        if (!$user) {
            abort(403);
        }
    
        $product = DB::table('products')->where('id_product', $id)->first();
        
        if (!$product) {
            abort(404);
        }
    
        $sizes = explode(', ', $product->size);
    
        return view('product.detail', compact('product', 'sizes', 'user'));
    }

    public function postAddToCart(Request $request, $id_product)
    {
        $product = DB::table('products')->where('id_product', $id_product)->first();
    
        if (!$product) {
            abort(404);
        }
    
        $id_user = Auth::user()->id_user;
        //dd($id_user);
        $user = DB::table('users')->where('id_user', $id_user)->first();
    
        if (!$user) {
            abort(404);
        }
    
        DB::table('carts')->insert([
            'id_user' => $id_user,
            'id_product' => $id_product,
            'price' => $request->price, 
            'size' => $request->size
        ]);
    
        return redirect('/product/all');
    }
    

}
