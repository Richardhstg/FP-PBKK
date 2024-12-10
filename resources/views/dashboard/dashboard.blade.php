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
                            AITronics Dashboard
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
        <div class="container-fluid" style="height: 100vh">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h3>Product Statistic</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap align-middle mb-0">
                                    <thead>
                                        <tr class="border-2 border-bottom border-primary border-0">
                                            <th scope="col" class="ps-0">Stat</th>
                                            <th scope="col">Product</th>
                                            <th scope="col" class="text-center">Price</th>
                                            <th scope="col" class="text-center">Overall</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr class="fs-3">
                                            <td>Most Sold</td>
                                            <td>{{ $mostSoldProduct->name }}</td>
                                            <td class="text-center fw-medium">{{ $mostSoldProduct->price }}</td>
                                            <td class="text-center fw-medium">{{ $mostSoldQuantity }}</td>
                                        </tr>
                                        <tr class="fs-3">
                                            <td>Least Sold</td>
                                            <td>{{ $leastSoldProduct->name }}</td>
                                            <td class="text-center fw-medium">{{ $leastSoldProduct->price }}</td>
                                            <td class="text-center fw-medium">{{ $leastSoldQuantity }}</td>
                                        </tr>
                                        <tr class="fs-3">
                                            <td>Most Expensive</td>
                                            <td>{{ $mostExpensiveProduct->name }}</td>
                                            <td class="text-center fw-medium">{{ $mostExpensiveProduct->price }}</td>
                                            <td class="text-center fw-medium">{{ $mostExpensiveQuantity }}</td>
                                        </tr>
                                        <tr class="fs-3">
                                            <td>Cheapest</td>
                                            <td>{{ $cheapestProduct->name }}</td>
                                            <td class="text-center fw-medium">{{ $cheapestProduct->price }}</td>
                                            <td class="text-center fw-medium">{{ $cheapestQuantity }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title d-flex align-items-center gap-2 mb-3 pb-3">Overall Product</h5>
                            <div class="row">
                                <div class="col-4">
                                    <iconify-icon icon="solar:laptop-minimalistic-line-duotone"
                                        class="fs-7 d-flex text-primary"></iconify-icon>
                                    <span class="fs-11 mt-2 d-block text-nowrap">Computers</span>
                                    <h4 class="mb-0 mt-1">0%</h4>
                                </div>
                                <div class="col-4">
                                    <iconify-icon icon="solar:smartphone-line-duotone"
                                        class="fs-7 d-flex text-secondary"></iconify-icon>
                                    <span class="fs-11 mt-2 d-block text-nowrap">Smartphone</span>
                                    <h4 class="mb-0 mt-1">100%</h4>
                                </div>
                                <div class="col-4">
                                    <iconify-icon icon="solar:tablet-line-duotone"
                                        class="fs-7 d-flex text-success"></iconify-icon>
                                    <span class="fs-11 mt-2 d-block text-nowrap">Tablets</span>
                                    <h4 class="mb-0 mt-1">0%</h4>
                                </div>
                            </div>

                            <div class="vstack gap-4 mt-7 pt-2">
                                <div>
                                    <div class="hstack justify-content-between">
                                        <span class="fs-3 fw-medium">Computers</span>
                                        <h6 class="fs-3 fw-medium text-dark lh-base mb-0">0%</h6>
                                    </div>
                                    <div class="progress mt-6" role="progressbar" aria-label="Warning example"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary" style="width: 0%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="hstack justify-content-between">
                                        <span class="fs-3 fw-medium">Smartphones</span>
                                        <h6 class="fs-3 fw-medium text-dark lh-base mb-0">100%</h6>
                                    </div>
                                    <div class="progress mt-6" role="progressbar" aria-label="Warning example"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary" style="width: 100%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="hstack justify-content-between">
                                        <span class="fs-3 fw-medium">Tablets</span>
                                        <h6 class="fs-3 fw-medium text-dark lh-base mb-0">0%</h6>
                                    </div>
                                    <div class="progress mt-6" role="progressbar" aria-label="Warning example"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 0%"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3>Recent Transaction</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap align-middle mb-0">
                                    <thead>
                                        <tr class="border-2 border-bottom border-primary border-0">
                                            <th scope="col">Order by</th>
                                            <th scope="col">Payment</th>
                                            <th scope="col" class="text-center">Price</th>
                                            <th scope="col" class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        @foreach ($transactions as $transaction)
                                            <tr class="fs-3">
                                                <td>{{ $transaction->user->name }}</td>
                                                <td>{{ $transaction->payment }}</td>
                                                <td class="text-center fw-medium">{{ $transaction->total_price }}</td>
                                                <td class="text-center fw-medium">{{ $transaction->status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
