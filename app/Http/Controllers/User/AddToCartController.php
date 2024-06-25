<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class AddToCartController extends Controller
{
    public function Add_To_Cart(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $price = $request->input('price');

        $product = product::findOrFail($product_id);
        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $product->id=>[
                    'image'=>$product->thumbnail,
                    'name'=>$product->p_title,
                    'price'=>$price,
                    'qty'=>$quantity,
                ]
            ];
            session()->put('cart',$cart);
            return true;
        }

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty']++;
            session()->put('cart',$cart);
            return true;
        }

        $cart[$product->id]=[
            'image'=>$product->thumbnail,
            'name'=>$product->p_title,
            'price'=>$price,
            'qty'=>$quantity,
        ];
        session()->put('cart',$cart);
        return true;




    }

    public function loadCart(Request $request)
    {
        return view('user.layout.cart_header');

    }
}
