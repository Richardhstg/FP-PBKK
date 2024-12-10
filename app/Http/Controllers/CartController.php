<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $carts = Cart::with('product')
            ->where('user_id', "=", $user_id)
            ->get();
        return view('frontend.cart', compact('carts'));
    }

    public function store(Request $request)
    {
        $total_price = $request->quantity * $request->price;
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;
        $cart->total_price = $total_price;

        $result = $cart->save();
        return redirect()->route('cart');
    }

    public function destroy($id)
    {
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Item not found in cart.');
        }

        $cartItem->delete();

        return redirect()->back()->with('success', 'Item removed from cart.');
    }
}
