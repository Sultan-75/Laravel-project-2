<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title Page-->
    <title> @yield('page_title') </title>
    <!-- All CSS-->
    <link href="{{ asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet"
        media="all" />
    <!-- Bootstrap CSS-->
    <link href="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet"
        media="all" />
    <!-- Main CSS-->
    <link href="{{ asset('admin_assets/css/theme.css') }}" rel="stylesheet" media="all" />
</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a href="#" class="logo">
                            <img src="{{ asset('admin_assets/images/icon/logo.png') }}" alt="Cool Admin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ url('admin/dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/category') }}">
                                <i class="fas fa-chart-bar"></i>Product</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('admin_assets/images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="@yield('dashboard_select')">
                            <a href="{{ url('admin/dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="@yield('product_select')">
                            <a href="{{ url('admin/product') }}">
                                <i class="fas fa-list"></i>Product</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap float-right">
                            <div class="account-wrap float-right">
                                <div class="account-item  js-item-menu">
                                    <div class="">
                                        <a class="text-dark" href="#">{{ session('ADMIN_NAME') }}</a>
                                        <i class="fas fa-chevron-down fa-1x"></i>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="fas fa-user"></i>Account</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="">
                                                <i class="fas fa-sign-out-alt"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            @section('container')
                            @show
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('admin_assets/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('admin_assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    {{-- Datatables --}}
    <script src="{{ asset('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('admin_assets/js/main.js') }}"></script>
    <!-- datatabels custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
</body>

</html>
<!-- end document-->
