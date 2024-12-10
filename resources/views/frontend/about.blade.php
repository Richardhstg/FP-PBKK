@extends('frontend.layout')
@section('main-content')
    <section id="billboard" class="hero-section position-relative padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center padding-large no-padding-bottom">
                        <h1 class="display-2 text-uppercase text-white">About US</h1>
                        <div class="breadcrumbs text-white">
                            <span class="item">
                                <a href="index.html">Home &gt;</a>
                            </span>
                            <span class="item">About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

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
                            <p>We care about the environment. All of our products are packaged with eco-friendly
                                materials,
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
                            <p>Found a lower price elsewhere? We’ll match it to ensure you get the best deal available.
                            </p>
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
                            <p>Join our membership program and gain access to exclusive offers, special discounts, and
                                early
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
                            <p>Need your items faster? Enjoy our express shipping service to get your products delivered
                                on
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
                            <p>Returning a product is easy with our hassle-free return policy. Simply follow the steps,
                                and
                                we’ll
                                handle the rest to ensure a smooth return process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="padding-large no-padding-top">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center justify-content-between">
                <div class="col-lg-6 col-md-12">
                    <div class="image-holder mb-4">
                        <div>
                            <img src="images/single-image3.png" alt="single" class="single-image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="detail ps-5">
                        <div class="display-header">
                            <h2 class="display-7 text-uppercase text-white">How was AITronics Found?</h2>
                            <p class="pb-3">AITronics was founded by a group of students from the Informatics Engineering
                                Department at Institut Teknologi Sepuluh
                                Nopember. They met during their first semester and have since developed a strong bond
                                through their shared passion for
                                technology. Now in their fifth semester, they decided to collaborate on an e-commerce
                                project to help people shop online
                                more conveniently. With a minimalist design approach, Riyanda leads the project as the
                                full stack developer, while
                                Richard and Jonathan handle the back-end development, ensuring the functionality and
                                seamless user experience of the
                                platform.</p>
                            <a href="{{ route('home') }}"
                                class="btn btn-medium btn-light text-uppercase btn-rounded-none">Shop Our
                                Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
