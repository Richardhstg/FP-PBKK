@extends('frontend.layout')
@section('main-content')
    <section id="selling-product" class="single-product padding-xlarge">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="product-preview mb-3">
                        <img src="{{ asset('images/' . $product['image']) }}" alt="single-product" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-info">
                        <div class="element-header text-white">
                            <h3 itemprop="name" class="display-7 text-uppercase">{{ $product['name'] }}</h3>
                            <div class="rating-container d-flex align-items-center">
                            </div>
                        </div>
                        <div class="product-price pt-3 pb-3">
                            <strong class="text-primary display-6 fw-bold">$ {{ $product['price'] }}</strong>
                        </div>
                        <p>{{ $product['description'] }}</p>
                        <div class="cart-wrap padding-small">
                            <div class="product-quantity">
                                <div class="stock-button-wrap pt-3">
                                    <form action="{{ route('cart.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id"
                                            value="{{ $product['id'] }}">
                                        <input type="hidden" name="price" id="price" value="{{ $product['price'] }}">
                                        <div class="input-group product-qty">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-number"
                                                    data-type="minus" data-field="">
                                                    -
                                                </button>
                                            </span>
                                            <input type="text" id="quantity" name="quantity"
                                                class="form-control input-number" value="1" min="1"
                                                max="100">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus btn btn-number"
                                                    data-type="plus" data-field="">
                                                    +
                                                </button>
                                            </span>
                                        </div>
                                        <div class="qty-button d-flex flex-wrap pt-3">
                                            <button type="submit" name="add-to-cart"
                                                class="btn btn-light btn-medium text-uppercase mt-3">Add to cart</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
