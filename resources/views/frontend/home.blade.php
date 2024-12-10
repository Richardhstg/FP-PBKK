@extends('frontend.layout')
@section('main-content')
    <section id="billboard" class="position-relative overflow-hidden">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6">
                                <div class="banner-content">
                                    <h1 class="display-2 text-uppercase text-light pb-5">Smart Deals for Smart Devices.</h1>
                                    <a href="{{ route('shop') }}"
                                        class="btn btn-medium btn-light text-uppercase btn-rounded-none">Shop Product</a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="image-holder">
                                    <img src="images/banner-image.png" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row d-flex flex-wrap align-items-center">
                            <div class="col-md-6">
                                <div class="banner-content">
                                    <h1 class="display-2 text-uppercase text-white pb-5">Technology Hack You Won't Get</h1>
                                    <a href="{{ route('shop') }}"
                                        class="btn btn-medium btn-light text-uppercase btn-rounded-none">Shop Product</a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="image-holder">
                                    <img src="images/banner-image.png" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-icon swiper-arrow swiper-arrow-prev">
            <svg class="chevron-left">
                <use xlink:href="#chevron-left" />
            </svg>
        </div>
        <div class="swiper-icon swiper-arrow swiper-arrow-next">
            <svg class="chevron-right">
                <use xlink:href="#chevron-right" />
            </svg>
        </div>
    </section>

    <section id="company-services" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="cart-outline">
                                <use xlink:href="#cart-outline" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-light">24/7 Customer Support</h3>
                            <p>Our customer support is available around the clock, 24/7. Enjoy a worry-free shopping
                                experience with
                                fast and responsive assistance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="quality">
                                <use xlink:href="#quality" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-light">Money-Back Guarantee</h3>
                            <p>If you’re not satisfied with the product, we offer a 30-day money-back guarantee with no
                                questions
                                asked.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="price-tag">
                                <use xlink:href="#price-tag" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-light">Product Warranty</h3>
                            <p>We provide a 1-year product warranty to ensure your satisfaction and the quality of your
                                purchase. Shop
                                confidently knowing that we stand behind our products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="shield-plus">
                                <use xlink:href="#shield-plus" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-light">Eco-Friendly Packaging</h3>
                            <p>We care about the environment. All of our products are packaged with eco-friendly materials,
                                ensuring
                                the safety of your items without harming the planet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="shield-plus">
                                <use xlink:href="#shield-plus" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-light">Price Match Guarantee</h3>
                            <p>Found a lower price elsewhere? We’ll match it to ensure you get the best deal available.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="shield-plus">
                                <use xlink:href="#shield-plus" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-light">Exclusive Membership Benefits</h3>
                            <p>Join our membership program and gain access to exclusive offers, special discounts, and early
                                access to
                                new products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="shield-plus">
                                <use xlink:href="#shield-plus" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-light">Express Shipping Options</h3>
                            <p>Need your items faster? Enjoy our express shipping service to get your products delivered on
                                time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="shield-plus">
                                <use xlink:href="#shield-plus" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title text-uppercase text-light">Hassle-Free Returns</h3>
                            <p>Returning a product is easy with our hassle-free return policy. Simply follow the steps, and
                                we'll
                                handle the rest to ensure a smooth return process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
        <div class="container">
            <div class="row">
                <div class="display-header d-flex justify-content-between pb-3">
                    <h2 class="display-7 text-light text-uppercase">Mobile Products</h2>
                    <div class="btn-right">
                        <a href="{{ route('shop') }}" class="btn btn-medium btn-normal text-uppercase text-white">Go to
                            Shop</a>
                    </div>
                </div>
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item1.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Affordable</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item2.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Stylist</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item3.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Simple</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item4.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Latest</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item5.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Iphone 12</a>
                                    </h3>
                                    <span class="item-price text-primary">$1300</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination position-absolute text-center"></div>
    </section>

    {{-- <section id="smart-watches" class="product-store padding-large position-relative">
        <div class="container">
            <div class="row">
                <div class="display-header d-flex justify-content-between pb-3">
                    <h2 class="display-7 text-light text-uppercase">Smart Watches</h2>
                    <div class="btn-right">
                        <a href="{{ route('shop') }}" class="btn btn-medium btn-normal text-uppercase text-white">Go to
                            Shop</a>
                    </div>
                </div>
                <div class="swiper product-watch-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item6.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Pink watch</a>
                                    </h3>
                                    <span class="item-price text-primary">$870</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item7.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Heavy watch</a>
                                    </h3>
                                    <span class="item-price text-primary">$680</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item8.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">spotted watch</a>
                                    </h3>
                                    <span class="item-price text-primary">$750</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item9.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">black watch</a>
                                    </h3>
                                    <span class="item-price text-primary">$650</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="images/product-item10.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg
                                                class="cart-outline">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">black watch</a>
                                    </h3>
                                    <span class="item-price text-primary">$750</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination position-absolute text-center"></div>
    </section> --}}

    <section id="yearly-sale" class=overflow-hidden mt-5 padding-xlarge"
        style="background-image: url('images/single-image1.png');background-position: right; background-repeat: no-repeat;">
        <div class="row d-flex flex-wrap align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="text-content offset-4 padding-medium">
                    <h3 class="text-white">10% Off</h3>
                    <h2 class="display-2 pb-5 text-uppercase text-white">Christmas sale</h2>
                    <a href="{{ route('shop') }}" class="btn btn-medium btn-light text-uppercase btn-rounded-none">Shop
                        Sale</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">

            </div>
        </div>
    </section>

    <section id="testimonials" class="position-relative">
        <div class="container">
            <div class="row">
                <div class="review-content position-relative">
                    <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center">
                        <svg class="chevron-left">
                            <use xlink:href="#chevron-left" />
                        </svg>
                    </div>
                    <div class="swiper testimonial-swiper">
                        <div class="quotation text-center">
                            <svg class="quote">
                                <use xlink:href="#quote" />
                            </svg>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center text-white d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote>“Shopping at AITronics was incredibly easy and enjoyable. The products are
                                        high quality,
                                        and the prices are very competitive. I also love the express shipping option, which
                                        made everything
                                        so convenient. Thank you, AITronics!”
                                    </blockquote>
                                    <div class="rating">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-half">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </div>
                                    <div class="author-detail">
                                        <div class="name text-white text-uppercase pt-2">Richard Sitanggang, President
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center text-white d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote>“AITronics is absolutely amazing! I was so impressed with the fast delivery
                                        and the
                                        quality of the products they offer. Their customer service team is super friendly
                                        and always ready
                                        to assist. I will definitely shop here again. Highly recommended!”
                                    </blockquote>
                                    <div class="rating">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                    <div class="author-detail">
                                        <div class="name text-white text-uppercase pt-2">Riyanda Cavin Sinambela, Security
                                            Engineer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center">
                        <svg class="chevron-right">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
@endsection
