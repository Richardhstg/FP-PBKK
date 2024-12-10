@extends('dashboard.dashboard_layout')
@section('main-content')
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <h1 class="d-flex align-items-center gap-2 ms-3 my-4">
                            Order List
                        </h1>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button
                                type="button" class="btn btn-primary me-2">Log
                                Out</button></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid">
            <div class="card">
                @if (session('success'))
                    <div class="m-2 alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @foreach ($transactions as $transaction)
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col">
                                        <h4>Order #ID{{ $transaction['id'] }}</h4>
                                        <h5>From : {{ $transaction->user->name }}</h5>
                                    </div>
                                    <div class="col fw-semibold">
                                        <p>Address : {{ $transaction['address'] }}</p>
                                        <p>Payment : {{ $transaction['payment'] }}</p>
                                        <p>Status : {{ $transaction['status'] }}</p>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-nowrap align-middle mb-0">
                                        <thead>
                                            <tr class="border-2 border-bottom border-primary border-0">
                                                <th scope="col" class="ps-0">Product</th>
                                                <th scope="col" class="text-center">Quantity</th>
                                                <th scope="col" class="text-center">Price</th>
                                                <th scope="col" class="text-center">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @foreach ($transaction->detail_transactions as $detail)
                                                <tr class="fs-3">
                                                    <td class>{{ $detail->product->name }}</td>
                                                    <td class="text-center">{{ $detail['quantity'] }}</td>
                                                    <td class="text-center">{{ $detail->product->price }}</td>
                                                    <td class="text-center">{{ $detail['total_price'] }}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="3" class="text-center fw-bold">Total</td>
                                                <td class="text-center">{{ $transaction['total_price'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="finish d-flex justify-content-end px-5">
                                <form method="POST"
                                    action="{{ route('dashboard-finish-order', ['id' => $transaction->id]) }}">
                                    @csrf
                                    <input type="hidden" name="trans_id" id="trans_id" value="{{ $transaction['id'] }}">
                                    <input type="submit" class="btn btn-info mb-3" value="Done">
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
