<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productlist()
    {
        $products = Product::all();
        return view('Product.productList')->with('products',$products);
        
    }
    public function addtocart(Request $req){
        $id = $req->id;
        $p = Product::where('p_id',$id)->first();
        $cart=[];
        if(session()->has('cart')){
            $cart = json_decode(session()->get('cart'));
        }
        $product = array('id'=>$id,'qty'=>1,'name'=>$p->Name,'price'=>$p->Price,'image'=>$p->Image);
        $cart[] = (object)($product);
        $jsonCart = json_encode($cart);
        session()->put('cart',$jsonCart);
        //return session()->get('cart');
        return redirect()->route('productlist');
    }

    public function emptycart(){
        session()->forget('cart');
        if(!session()->has('cart')){
            return view('product.cart');
        }
        return session('cart');
        
    }
    public function mycart(){
        $cart = json_decode(session()->get('cart'));
        return view('product.cart')
        ->with('cart',$cart);
    }

}
