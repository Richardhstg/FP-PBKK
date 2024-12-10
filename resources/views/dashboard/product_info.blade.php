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
                            Product
                            {{-- <i class="ti ti-device-mobile"></i> --}}
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
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row d-flex">
                @foreach ($products as $product)
                    <div class="col-lg-4">
                        <div class="card overflow-hidden hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top"
                                        alt="matdash-img" style="width: 300px; height: 400px; object-fit:cover;">
                                </a>
                                <span
                                    class="badge text-bg-light text-dark fs-6 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">$
                                    {{ $product['price'] }}</span>
                            </div>
                            <div class="card-body p-4">
                                <h4 class="d-block my-2 fs-5 text-dark fw-semibold">{{ $product['name'] }}
                                </h4>
                                <p class="d-block my-2 fs-5 text-dark">{{ $product['description'] }}
                                </p>
                                </p>
                                <div class="action d-flex justify-content-end">
                                    <a href="{{ route('dashboard-edit-product', ['id' => $product->id]) }}"
                                        class="btn btn-info me-2">Update</a>
                                    <button class="btn btn-danger me-2"
                                        onclick="deleteFunction('{{ $product->id }}')">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ route('dashboard-product-delete') }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" id="delete_id">


                    <div class="modal-body">
                        <center>
                            <h3>Are you sure</h3>
                            <h4>Delete the data?</h4>
                        </center>
                    </div>
                    <div class="row" style="margin-bottom: 50px; text-align: center;">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-danger btn-modal" data-bs-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-success btn-modal">Delete</button>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
