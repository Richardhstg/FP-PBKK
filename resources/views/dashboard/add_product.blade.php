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
                <div class="card-body">
                    <h3 class="fw-semibold mb-4">{{ $title }}</h3>
                    <div class="card">
                        <div class="card-body">
                            <form method="post"
                                action="@if (isset($edit->id)) {{ route('dashboard-update-product', ['id' => $edit->id]) }}@else{{ route('dashboard-store-product') }} @endif"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="@if (isset($edit->id)) {{ $edit->name }}@else {{ old('name') }} @endif">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="desc" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="desc" name="desc"
                                        value="@if (isset($edit->id)) {{ $edit->description }}@else {{ old('description') }} @endif">
                                    @error('desc')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price"
                                        value="{{ old('price', $edit->price ?? '') }}">
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-5">
                                    <label class="form-label">Image</label>
                                    <div class="avatar-upload">
                                        <div>
                                            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg"
                                                onchange="previewImage(this)" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="@if (isset($edit->id) && $edit->image != '') background-image:url('{{ url('/') }}/images/{{ $edit->image }}')@else background-image: url('{{ url('/img/avatar.png') }}') @endif">
                                            </div>
                                        </div>
                                    </div>
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="submit" class="btn btn-primary my-4" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
