@extends('frontend.layout')
@section('main-content')
    <!-- Start Hero -->
    <section id="billboard" class="hero-section position-relative padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center padding-large no-padding-bottom">
                        <h1 class="display-2 text-uppercase text-white">Cart</h1>
                        <div class="breadcrumbs text-white">
                            <span class="item">
                                <a href="index.html">Home &gt;</a>
                            </span>
                            <span class="item">Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <section class="shopify-cart padding-large">
        <div class="container">
            @if ($carts->isEmpty())
                <h2 class="text-center display-7 text-uppercase text-white pb-4">Your Cart is Empty!</h2>
                <h4 class="text-center display-7 text-uppercase text-white pb-4"><a href="{{ route('shop') }}"><button
                            type="button" class="btn btn-light mx-3">Shop Now</button></a></h4>
            @else
                <div class="row">
                    <div class="cart-table">
                        <div class="cart-header">
                            <div class="row d-flex text-uppercase text-white">
                                <h3 class="cart-title col-lg-4 pb-3">Product</h3>
                                <h3 class="cart-title col-lg-3 pb-3">Quantity</h3>
                                <h3 class="cart-title col-lg-4 pb-3">Subtotal</h3>
                            </div>
                        </div>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($carts as $cart)
                            @php
                                $total += $cart['total_price'];
                            @endphp
                            <div class="cart-item border-top border-bottom padding-small">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-3">
                                        <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                                            <div class="col-lg-5">
                                                <div class="card-image">
                                                    <img src="{{ asset('images/' . $cart->product['image']) }}"
                                                        alt="cloth" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card-detail ps-3">
                                                    <h3 class="card-title text-uppercase">
                                                        <a href="#">{{ $cart->product['name'] }}</a>
                                                    </h3>
                                                    <div class="card-price">
                                                        <span class="money text-primary" data-currency-usd="$1200.00">$
                                                            {{ $cart->product['price'] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7">
                                        <div class="row d-flex">
                                            <div class="col-md-6">
                                                <div class="total-price">
                                                    <span class=" fs-2 text-primary">{{ $cart['quantity'] }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="total-price">
                                                    <span class="money text-primary">$ {{ $cart['total_price'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <div class="cart-remove">
                                            <form action="{{ route('cart.delete', $cart['id']) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                <button type="submit" class="btn">
                                                    <svg class="close" width="38px">
                                                        <use xlink:href="#close"></use>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="cart-totals bg-grey padding-medium">
                        <h2 class="display-7 text-uppercase text-white pb-4">Cart Totals</h2>
                        <div class="total-price pb-5">
                            <table cellspacing="0" class="table text-uppercase text-white">
                                <tbody>
                                    <tr class="order-total pt-2 pb-2 border-bottom">
                                        <th>
                                            <h2>Total</h2>
                                        </th>
                                        <td data-title="Total">
                                            <span class="price-amount amount text-primary ps-0">
                                                <h2>$ {{ $total }}</h2>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="button-wrap">
                            <button class="btn btn-light btn-medium text-uppercase me-2 mb-3 btn-rounded-none"><a
                                    href="{{ route('shop') }}" class="text-dark">Continue Shopping</a>
                            </button>
                            <button class="btn btn-light btn-medium text-uppercase me-2 mb-3 btn-rounded-none"><a
                                    href="{{ route('checkout') }}" class="text-dark">Proceed To Check Out</a>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
