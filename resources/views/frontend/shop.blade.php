@extends('frontend.layout')
@section('main-content')
    <!-- Start Hero -->
    <section id="billboard" class="hero-section position-relative padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center padding-large no-padding-bottom">
                        <h1 class="display-2 text-uppercase text-white">Shop</h1>
                        <div class="breadcrumbs text-white">
                            <span class="item">
                                <a href="index.html">Home &gt;</a>
                            </span>
                            <span class="item">Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <section class="shopify-grid padding-large">
        <div class="container">
            <div class="row">
                <main class="col-md-9">
                    <div class="product-content product-store d-flex justify-content-between flex-wrap">
                        @if ($products->isEmpty())
                            <p class="fs-3 text-center w-100">No products found.</p>
                        @else
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-card position-relative pe-3 pb-3">
                                        <div class="image-holder">
                                            <img src="{{ asset('images/' . $product['image']) }}" alt="product-item"
                                                class="img-fluid" style="width: 300px; height: 400px; object-fit:cover;">
                                        </div>
                                        <div class="cart-concern position-absolute">
                                            <div class="cart-button d-flex">
                                                <div class="btn-left">
                                                    <a href="{{ route('single', ['id' => $product->id]) }}"
                                                        class="btn btn-medium btn-black">Add to Cart</a>
                                                    <svg class="cart-outline position-absolute">
                                                        <use xlink:href="#cart-outline"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-detail pt-3 pb-3">
                                            <h3 class="card-title text-uppercase fs-4">
                                                <a href="#">{{ $product['name'] }}</a>
                                            </h3>
                                            <span class="item-price text-primary fs-5">$ {{ $product['price'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </main>
                <aside class="col-md-3">
                    <div class="sidebar text-white">
                        <div class="widget-menu">
                            <div class="widget-search-bar">
                                <form role="search" method="get" class="d-flex"
                                    action="{{ route('product-search') }}   ">
                                    <input class="search-field" type="text" name="query"
                                        placeholder="Search products..." value="{{ old('query') }}" required>
                                    <div class="search-icon bg-light">
                                        <button type="submit">
                                            <svg class="search text-dark">
                                                <use xlink:href="#search"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget-product-categories pt-5">
                            <h3 class="mb-4">Search by Image</h3>
                            <form class="form1" method="post" action="{{ route('photo.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-12 mb-3">
                                    <div class="avatar-upload">
                                        <div>
                                            <input type='file' id="imageUpload" name="nama" accept=".png, .jpg, .jpeg"
                                                onchange="previewImage(this)" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview my-4">
                                            <div id="imagePreview"
                                                style="background-image: url('{{ url('/img/avatar.png') }}')">
                                            </div>
                                        </div>
                                    </div>
                                    @error('photo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script type="text/javascript">
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#imagePreview").css('background-image', 'url(' + e.target.result + ')');
                    $("#imagePreview").hide();
                    $("#imagePreview").fadeIn(700);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
<style>
    .avatar-upload {
        position: relative;
        max-width: 205px;
    }

    .avatar-upload .avatar-preview {
        width: 67%;
        height: 147px;
        position: relative;
        border-radius: 3%;
        border: 6px solid #F8F8F8;
    }

    .avatar-upload .avatar-preview>div {
        width: 100%;
        height: 100%;
        border-radius: 3%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
