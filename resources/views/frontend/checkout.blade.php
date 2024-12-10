@extends('frontend.layout')
@section('main-content')
    <section id="billboard" class="hero-section position-relative padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center padding-large no-padding-bottom">
                        <h1 class="display-2 text-uppercase text-white">Checkout</h1>
                        <div class="breadcrumbs text-white">
                            <span class="item">
                                <a href="index.html">Home &gt;</a>
                            </span>
                            <span class="item">Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
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
                            <h3 class="cart-title col-lg-4 pb-3 text-center">Product</h3>
                            <h3 class="cart-title col-lg-4 pb-3 text-center">Quantity</h3>
                            <h3 class="cart-title col-lg-4 pb-3 text-center ">Subtotal</h3>
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
                                    <div class="cart-info d-flex flex-wrap align-items-center justify-content-center mb-4">
                                        <div class="col-lg-5">
                                            <div class="card-image">
                                                <img src="{{ asset('images/' . $cart['image']) }}" alt="cloth"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card-detail ps-3">
                                                <h3 class="card-title text-uppercase">
                                                    <a href="#">{{ $cart['name'] }}</a>
                                                </h3>
                                                <div class="card-price">
                                                    <span class="money text-primary fs-5" data-currency-usd="$1200.00">$
                                                        {{ $cart['price'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="row d-flex">
                                        <div class="col-md-6">
                                            <div class="total-price">
                                                <h2 class=" fs-2 text-primary text-center">{{ $cart['quantity'] }}</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="total-price">
                                                <h2 class="money text-primary fs-2 text-center">$ {{ $cart['total_price'] }}
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
    <section class="shopify-cart checkout-wrap padding-large">
        <div class="container">
            <form class="form-group" action="{{ route('order') }}" method="POST">
                @csrf
                <input type="hidden" name="total" id="total" value="{{ $total }}">
                <div class="row d-flex flex-wrap align-items-center">
                    <div class="col-lg-6">
                        <h2 class="display-7 text-uppercase text-white pb-4">Billing Details</h2>
                        <div class="billing-details text-white">
                            <label class="fs-4" for="fname">Address</label>
                            <input type="text" id="address" name="address" class="form-control mt-2 mb-4 ps-3">
                            <div class="list-group mt-5 mb-3">
                                <label class="list-group-item d-flex gap-2 border-0">
                                    <input class="form-check-input flex-shrink-0" type="radio" name="payment"
                                        id="payment1" value="Bank Transfer" checked="">
                                    <span>
                                        <strong class="text-uppercase">Bank Transfer</strong>
                                        <small class="d-block text-body-secondary">Make your payment directly
                                            into
                                            our
                                            bank account. Please use your Order ID. Your order will shipped
                                            after
                                            funds
                                            have cleared in our account.</small>
                                    </span>
                                </label>
                                <label class="list-group-item d-flex gap-2 border-0">
                                    <input class="form-check-input flex-shrink-0" type="radio" name="payment"
                                        id="payment2" value="E-money">
                                    <span>
                                        <strong class="text-uppercase">E-money</strong>
                                        <small class="d-block text-body-secondary">Make your payment directly
                                            into
                                            our
                                            e-money account.</small>
                                    </span>
                                </label>
                                <label class="list-group-item d-flex gap-2 border-0">
                                    <input class="form-check-input flex-shrink-0" type="radio" name="payment"
                                        id="payment3" value="COD">
                                    <span>
                                        <strong class="text-uppercase">Cash on delivery</strong>
                                        <small class="d-block text-body-secondary">Pay with cash upon
                                            delivery.</small>
                                    </span>
                                </label>
                                <label class="list-group-item d-flex gap-2 border-0">
                                    <input class="form-check-input flex-shrink-0" type="radio" name="payment"
                                        id="payment3" value="Paypal">
                                    <span>
                                        <strong class="text-uppercase">Paypal</strong>
                                        <small class="d-block text-body-secondary">Pay via PayPal; you can pay
                                            with
                                            your
                                            credit card if you don't have a PayPal account.</small>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        @csrf
                        <div class="col-lg-6">
                            <div class="your-order mt-5">
                                <h2 class="display-7 text-uppercase text-white pb-4">Cart Totals</h2>
                                <div class="total-price">
                                    <table cellspacing="0" class="table">
                                        <tbody>
                                            <tr
                                                class="subtotal border-top border-bottom pt-2 pb-2 text-uppercase text-white">
                                                <th>
                                                    <h4>Total</h4>
                                                </th>
                                                <td data-title="Subtotal">
                                                    <span class="price-amount amount text-primary ps-0">
                                                        <bdi>
                                                            <h4>$ {{ $total }}</h4>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="submit" name="submit"
                                        class="btn btn-light btn-medium text-uppercase btn-rounded-none">Place an
                                        order</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </section>
@endsection
