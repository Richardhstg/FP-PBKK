<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaction;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Produk dengan jumlah terjual terbanyak
        $mostSoldProduct = Product::withSum('detail_transactions', 'quantity')
            ->orderBy('detail_transactions_sum_quantity', 'desc')
            ->first();
        $mostSoldQuantity = $mostSoldProduct ? $mostSoldProduct->detail_transactions_sum_quantity : 0;

        // Produk dengan jumlah terjual paling sedikit
        $leastSoldProduct = Product::withSum('detail_transactions', 'quantity')
            ->whereHas('detail_transactions') // Hanya produk yang memiliki transaksi
            ->orderBy('detail_transactions_sum_quantity', 'asc')
            ->first();
        $leastSoldQuantity = $leastSoldProduct ? $leastSoldProduct->detail_transactions_sum_quantity : 0;

        // Produk dengan harga paling mahal
        $mostExpensiveProduct = Product::orderBy('price', 'desc')->first();
        $mostExpensiveQuantity = $mostExpensiveProduct
            ? $mostExpensiveProduct->detail_transactions()->sum('quantity')
            : 0;

        // Produk dengan harga paling murah
        $cheapestProduct = Product::orderBy('price', 'asc')->first();
        $cheapestQuantity = $cheapestProduct
            ? $cheapestProduct->detail_transactions()->sum('quantity')
            : 0;

        $transactions = Transaction::with([
            'user',
            'detail_transactions'
        ])->orderByDesc('id')
            ->get();

        // Kirim data ke view
        return view('dashboard.dashboard', [
            'mostSoldProduct' => $mostSoldProduct,
            'mostSoldQuantity' => $mostSoldQuantity,
            'leastSoldProduct' => $leastSoldProduct,
            'leastSoldQuantity' => $leastSoldQuantity,
            'mostExpensiveProduct' => $mostExpensiveProduct,
            'mostExpensiveQuantity' => $mostExpensiveQuantity,
            'cheapestProduct' => $cheapestProduct,
            'cheapestQuantity' => $cheapestQuantity,
            'transactions' => $transactions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
