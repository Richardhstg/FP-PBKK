@extends('frontend.layout')
@section('main-content')
    <!-- Start Hero -->
    <section id="billboard" class="hero-section position-relative padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center padding-large no-padding-bottom">
                        <h1 class="display-2 text-uppercase text-white">My Order</h1>
                        <div class="breadcrumbs text-white">
                            <span class="item">
                                <a href="index.html">Home &gt;</a>
                            </span>
                            <span class="item">My order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <section class="shopify-cart padding-large">
        <div class="container">
            @if ($orders->isEmpty())
                <h2 class="text-center display-7 text-uppercase text-white pb-4">Your Order is Empty!</h2>
                <h4 class="text-center display-7 text-uppercase text-white pb-4"><a href="{{ route('shop') }}"><button
                            type="button" class="btn btn-light mx-3">Shop Now</button></a></h4>
            @else
                <div class="row">
                    <div class="cart-table">
                        <div class="cart-header">
                            <div class="row d-flex text-uppercase text-white">
                                <h3 class="cart-title col-lg-3 pb-3 text-center">Product</h3>
                                <h3 class="cart-title col-lg-3 pb-3 text-center">Quantity</h3>
                                <h3 class="cart-title col-lg-3 pb-3 text-center">Subtotal</h3>
                                <h3 class="cart-title col-lg-3 pb-3 text-center">Status</h3>
                            </div>
                        </div>
                        @foreach ($orders as $order)
                            <div class="cart-item border-top border-bottom padding-small">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-3">
                                        <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                                            <div class="col-lg-5">
                                                <div class="card-image">
                                                    <img src="{{ asset('images/' . $order['image']) }}" alt="cloth"
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card-detail ps-3">
                                                    <h3 class="card-title text-uppercase">
                                                        <a href="#">{{ $order['name'] }}</a>
                                                    </h3>
                                                    <div class="card-price">
                                                        <span class="money text-primary" data-currency-usd="$1200.00">$
                                                            {{ $order['price'] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7">
                                        <div class="row d-flex">
                                            <div class="col-md-6">
                                                <div class="total-price">
                                                    <span class=" fs-2 text-primary">{{ $order['quantity'] }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="total-price">
                                                    <span class="money text-primary">$ {{ $order['total_price'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <h2 class="text-primary">{{ $order['status'] }}</h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="cart-totals bg-grey padding-medium d-flex justify-content-end">
                        <div class="button-wrap">
                            <button class="btn btn-light btn-medium text-uppercase me-2 mb-3 btn-rounded-none"><a
                                    href="{{ route('shop') }}" class="text-dark">Continue Shopping</a>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
