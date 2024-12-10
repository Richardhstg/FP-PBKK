<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navers</title>
    <link rel="shortcut icon" type="image/png" href="/images/logos_only.png" />
    <link rel="stylesheet" href="/assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between ps-5 pt-5">
                    <a href="{{ route('dashboard') }}" class="text-nowrap logo-img bg-dark">
                        <img src="/images/logos.png" alt="" style="width: 160px;" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Transaction</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard-order') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="material-symbols:local-shipping" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Order</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-6"
                                class="fs-6"></iconify-icon>
                            <span class="hide-menu">Product</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard-product-info') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:login-3-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Product Info</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard-add-product') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:user-plus-rounded-bold-duotone"
                                        class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Add Product</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"
                                class="fs-6"></iconify-icon>
                            <span class="hide-menu">User</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard-user-info') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:sticker-smile-circle-2-bold-duotone"
                                        class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">User Info</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        @yield('main-content')
        <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="/assets/libs/simplebar/dist/simplebar.js"></script>
        <script src="/assets/js/sidebarmenu.js"></script>
        <script src="/assets/js/app.min.js"></script>
        <script src="/assets/js/dashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
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
        <script>
            function deleteFunction(id) {
                document.getElementById('delete_id').value = id;
                $("#modalDelete").modal('show');
            }
        </script>
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

</body>

</html>
