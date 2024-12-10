<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\DetailTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $carts = Cart::join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', '=', $user_id)
            ->get();
        return view('frontend.checkout', compact('carts'));
    }

    public function order(Request $request)
    {
        $user_id = Auth::user()->id;
        $transaction = new Transaction();
        $transaction->user_id = $user_id;
        $transaction->address = $request->address;
        $transaction->total_price = $request->total;
        $transaction->payment = $request->payment;
        $transaction->status = 'Pending';
        $transaction->save();

        $transaction_id = $transaction->id;

        $carts = Cart::where('user_id', $user_id)->get();

        foreach ($carts as $cart) {
            $detail = new DetailTransaction();
            $detail->product_id = $cart->product_id;
            $detail->transaction_id = $transaction_id;
            $detail->quantity = $cart->quantity;
            $detail->total_price = $cart->total_price;
            $detail->save();
        }

        Cart::where('user_id', $user_id)->delete();

        return redirect()->route('cart');
    }
}
