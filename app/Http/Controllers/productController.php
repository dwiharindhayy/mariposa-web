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
        $nameUser = Auth::user()->name;
        // $idUser = Auth::user()->id_user;
        // dd(Auth::check(), Auth::user(), $idUser);
        $categories = ['bluss', 'make-up', 'rok', 'bag', 'dress', 'heels'];
        $productsByCategory = [];
    
        foreach ($categories as $category) {
            $productsByCategory[$category] = DB::table('products')->where('category', $category)->get();
        }
    
        // Debug untuk memastikan session terbaca
        // dd($userId, $productsByCategory);
    
        return view('product.all', compact('productsByCategory', 'nameUser'));
    }

    public function getProductByCategory($category)
    {
        $nameUser = Auth::user()->name;
        $products = DB::table('products')->where('category', $category)->get();
        return view('product.category', compact('products', 'category', 'nameUser'));
    }

    public function getProductDetail($id)
    {
        $nameUser = Auth::user()->name;
        $user = auth()->user();
    
        if (!$user) {
            abort(403);
        }
    
        $product = DB::table('products')->where('id_product', $id)->first();
        
        if (!$product) {
            abort(404);
        }
    
        $sizes = explode(', ', $product->size);
    
        return view('product.detail', compact('product', 'sizes', 'user', 'nameUser'));
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

    public function getCart()
    {
        $id_user = Auth::user()->id_user;
    
        $carts = DB::table('carts')
            ->join('products', 'carts.id_product', '=', 'products.id_product')
            ->where('carts.id_user', $id_user)
            ->select('carts.id_cart', 'products.image', 'products.name', 'carts.size', 'carts.price')
            ->get();
    
        return view('product.cart', compact('carts'));
    }   

    public function postCartCheckout(Request $request)
    {
        $id_user = Auth::user()->id_user;
        $nameUser = Auth::user()->name;
        $data = $request->all();
    
        if (empty($request->address)) {
            $data['address'] = "Barang diambil di toko";
        }
    
        $message = "Hai $nameUser, terima kasih telah berbelanja di Mariposa.%0A";
        $message .= "Berikut pesananmu:%0A%0A";
    
        foreach ($data['hidden-name'] as $index => $productName) {
            $size = $data['hidden-size'][$index];
            $quantity = $data['quantities'][$index];
            $message .= "- $productName Size: $size Jumlah: $quantity%0A";
        }
    
        $subtotal = number_format($data['hidden-subtotal'], 0, ',', '.');
        $message .= "%0A*Total:* Rp $subtotal%0A";
        $message .= "Dikirim ke: {$data['address']}";
    
        $whatsappUrl = "https://web.whatsapp.com/send?phone=628980341546&text=$message";
    
        return redirect()->away($whatsappUrl);
    }
    
    public function deleteCartItem(Request $request)
    {
        $id_cart = $request->input('id_cart');

        DB::table('carts')->where('id_cart', $id_cart)->delete();

        return response()->json(['success' => true]);
    }

    public function searchProduct(Request $request)
    {
        $nameUser = Auth::user()->name;
        $query = $request->input('query');
        $products = DB::table('products')
                      ->where('name', 'like', '%' . $query . '%')
                      ->orWhere('category', 'like', '%' . $query . '%')
                      ->get();
        
        //dd($products);
        return view('product.search', compact('products', 'query', 'nameUser'));
    }
    

}
