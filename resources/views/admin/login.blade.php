<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title Page-->
    <title>Login</title>

    <!--  CSS-->
    <link href="{{ asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet"
        media="all" />
    <!-- Bootstrap CSS-->
    <link href="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all" />

    <!-- Main CSS-->
    <link href="{{ asset('admin_assets/css/theme.css') }}" rel="stylesheet" media="all" />
</head>

<body>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <h3>LOGIN FORM</h3>
                            </a>
                        </div>
                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('error') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="login-form">
                            <form action="{{ route('admin.auth') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email"
                                        placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"
                                        placeholder="Password" />
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">
                                    sign in
                                </button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('admin_assets/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('admin_assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Main JS-->
</body>

</html>
<!-- end document-->
