<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function getProductAll(){
        $categories = ['bluss', 'make up', 'rok', 'bag', 'dress', 'heels'];
        $productsByCategory = [];
    
        foreach ($categories as $category) {
            $productsByCategory[$category] = DB::table('products')->where('category', $category)->get();
        }
    
        return view('product.all', compact('productsByCategory'));
    }

    public function getProductByCategory($category)
    {
        $products = DB::table('products')->where('category', $category)->get();
        return view('product.category', compact('products', 'category'));
    }

    public function getProductDetail($id)
{
    $product = DB::table('products')->where('id_product', $id)->first();
    
    if (!$product) {
        abort(404);
    }

    return view('product.detail', compact('product'));
}

    public function getUpload(){
        return view('upload');
    }

}
