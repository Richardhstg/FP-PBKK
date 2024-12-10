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
                            User Info
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
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap align-middle mb-0">
                                        <thead>
                                            <tr class="border-2 border-bottom border-primary border-0">
                                                <th scope="col" class="text-center">Username</th>
                                                <th scope="col" class="text-center">Email</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @foreach ($users as $user)
                                                <tr class="fs-3">
                                                    <td class="text-center">{{ $user['name'] }}</td>
                                                    <td class="text-center">{{ $user['email'] }}</td>
                                                    <td class="text-center fw-medium">
                                                        <a href="{{ route('dashboard-edit-user', ['id' => $user->id]) }}"
                                                            class="btn
                                                        btn-info me-2">Update</a>
                                                        <button class="btn btn-danger me-2"
                                                            onclick="deleteFunction('{{ $user->id }}')">Delete</button>
                                                    </td>
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
        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('dashboard-user-delete') }}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" id="delete_id">


                        <div class="modal-body">
                            <center>
                                <h3>Are you sure</h3>
                                <h4>Delete the data?</h4>
                            </center>
                        </div>
                        <div class="row" style="margin-bottom: 50px; text-align: center;">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-danger btn-modal"
                                    data-bs-dismiss="modal">Cancel</button>
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
