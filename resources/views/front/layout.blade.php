<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Rosemount | @yield('page_title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('front_assets/img/favicon.ico') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- Font AWsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css"
        integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Animate.css -->
    <!-- owl.carousel -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_assets/css/owl.theme.default.min.css') }}" />
    <!-- owl.carousel -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/style.css') }}" />
</head>

<body>
    <div class="container-fluid bg-light" id="myHeader">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="__img-logo" src="{{ asset('front_assets/img/l5.png') }}" alt="Logo" />
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars" style="color: #056423; font-size: 28px"></i>
                    </span>
                    <span class="close text-dark px-1 text-dark">
                        <i class="fa fa-close" style="color: #8b0513; font-size: 30px"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse bg-light" id="navbarScroll">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Fragrances
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Oriental</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">French</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="product.html" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    @section('container')
    @show

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="container">
                <div class="row">
                    <!-- Left -->
                    <div class="col-md-6">
                        <div class="mx-auto mt-2 h5 __color-logo">
                            <span>Get connected with us on social networks:</span>
                        </div>
                    </div>
                    <!-- Left -->
                    <div class="col-md-6">
                        <!-- Right -->
                        <div class="mx-auto mt-2">
                            <a href="" class="mx-2 text-center btn __socail-icon __fb">
                                <i class="fa fa-facebook-f fa-2x"></i>
                            </a>
                            <a href="" class="mx-2 text-center btn __socail-icon __twitte">
                                <i class="fa fa-twitter fa-2x r"></i>
                            </a>

                            <a href="" class="mx-2 text-center btn __socail-icon __whatsapp">
                                <i class="fa fa-whatsapp fa-2x"></i>
                            </a>
                            <a href="" class="mx-2 text-center btn __socail-icon __linkedin">
                                <i class="fa fa-linkedin fa-2x"></i>
                            </a>
                        </div>
                        <!-- Right -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container mt-4">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-3">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">Rosemount Perfumes</h6>
                        <p class="text-justify">
                            ROSE MOUNT, a premium company sense of style, essence and
                            imminence, is the finest brand from Rosemount perfumes.
                            ROSEMOUNT defines lifestyle and caters through its best in class
                            perfumes.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-3">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Products</h6>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Ator</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Perfume</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Scent</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mb-3">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-3">Useful links</h6>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Home</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">About</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Contact</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Product</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mb-3">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-3">Contact</h6>
                        <p><i class="fa fa-home"></i> Dubai City, Dubai</p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            info@Rosemountperfumes.com
                        </p>
                        <p><i class="fa fa-phone"></i> + 97 234 567 88</p>
                        <p><i class="fa fa-whatsapp"></i> + 97 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05)">
            © 2020-2021 Copyright Rosemountperfumes
            <p class="mt-1">
                Developed by<span class="font-weight-bold text-danger">Triangle</span>
            </p>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer End-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- owl.carousel -->
    <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('front_assets/js/main.js') }}"></script>
    <!-- owl.carousel -->
</body>

</html>
