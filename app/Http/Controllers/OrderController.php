<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaction;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $orders = DetailTransaction::join('products', 'detail_transactions.product_id', '=', 'products.id')
            ->join('transactions', 'transactions.id', '=', 'detail_transactions.transaction_id')
            ->where('transactions.user_id', '=', $user_id)
            ->get();
        return view('frontend.user_order', compact('orders'));
    }

    public function index_dashboard()
    {
        $transactions = Transaction::with([
            'user',
            'detail_transactions.product'
        ])->where('status', 'Pending')
            ->orderByDesc('id')
            ->get();
        return view('dashboard.order', compact('transactions'));
    }

    public function finish(Request $request, string $id)
    {
        $update = Transaction::findOrFail($id);

        $update->status = "Completed";

        $result = $update->save();
        Session::flash('success', 'Order Finished');
        return redirect()->route('dashboard-order');
    }
}
