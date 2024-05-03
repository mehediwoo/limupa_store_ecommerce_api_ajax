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
        $cart = [
            $product_id=[],
        ];
        session()->put('cart',$cart);

    }

    public function loadCart(Request $request)
    {
        $product_id = session()->get('cart');
        $cart_iteam = product::where('id',$product_id)->get();
        return view('user.layout.cart_header')->with('cart_iteam',$cart_iteam);

    }
}
