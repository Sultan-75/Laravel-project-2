@extends('front/layout')
@section('page_title', 'Home')
@section('container')
    <!-- Banner-->
    <div class="container">
        <img class="d-block w-100" src="{{ asset('front_assets/img/banner.jpg') }}" alt="Banner img" />
    </div>

    <!-- PARTNERS START-->

    <div class="container __mobile-container mt-4">
        <div class="__partner-container">
            <div class="owl-one owl-carousel owl-theme">
                <div class="card __card-partner d-flex justify-content-center">
                    <div class="__card-partner-img">
                        <img src="{{ asset('front_assets/img/l7.png') }}" alt="1" />
                    </div>
                </div>

                <div class="card __card-partner d-flex justify-content-center">
                    <div class="__card-partner-img">
                        <img src="{{ asset('front_assets/img/l4.png') }}" alt="2" />
                    </div>
                </div>

                <div class="card __card-partner d-flex justify-content-center">
                    <div class="__card-partner-img">
                        <img src="{{ asset('front_assets/img/l5.png') }}" alt="3" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container __desktop-container">
        <div class="row my-4">
            <div class="col-md-4">
                <div class="card __desktop-card d-flex justify-content-center align-item-center">
                    <div class="__desktop-card-img">
                        <img src="{{ asset('front_assets/img/l7.png') }}" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card __desktop-card d-flex justify-content-center align-item-center">
                    <div class="__desktop-card-img">
                        <img src="{{ asset('front_assets/img/l4.png') }}" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card __desktop-card d-flex justify-content-center align-item-center">
                    <div class="__desktop-card-img">
                        <img src="{{ asset('front_assets/img/l5.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PARTNERS END-->

    <div class="container-fluid __product my-5">
        <div class="container __heading-wrapper">
            <div class="__heading-wrapper-1 text-center">
                <h3>POPULAR PRODUCTS</h3>
            </div>
            <div class="__heading-wrapper-2 text-center">
                <p>
                    If you want to buy exquisite and distinctive luxurious perfumes,
                    here are the most popular products from our high-end perfumes having
                    rose fragrance, natural fragrance, exotic and the finest scents you
                    could ever imagine.
                </p>
            </div>
        </div>
    </div>

    <!--  carousel for product images -->
    <div class="container mb-4">
        <div class="owl-carousel">
            <div class="card __custom_card mb-4">
                <div class="card-body">
                    <a href="product_details.html">
                        <img class="img-fluid" src="{{ asset('front_assets/img/22.jpeg') }}" alt="Card image cap" />
                    </a>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-md-sm __btn-accent float-right">
                        Buy Now</a>
                </div>
            </div>
            <div class="card __custom_card mb-4">
                <div class="card-body">
                    <a href="product_details.html">
                        <img class="img-fluid" src="{{ asset('front_assets/img/33.jpeg') }}" alt="Card image cap" />
                    </a>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-md-sm __btn-accent float-right">
                        Buy Now</a>
                </div>
            </div>
            <div class="card __custom_card mb-4">
                <div class="card-body">
                    <a href="product_details.html">
                        <img class="img-fluid" src="{{ asset('front_assets/img/11.jpeg') }}" alt="Card image cap" />
                    </a>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-md-sm __btn-accent float-right">
                        Buy Now</a>
                </div>
            </div>
            <div class="card __custom_card mb-4">
                <div class="card-body">
                    <a href="product_details.html">
                        <img class="img-fluid" src="{{ asset('front_assets/img/22.jpeg') }}" alt="Card image cap" />
                    </a>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-md-sm __btn-accent float-right">
                        Buy Now</a>
                </div>
            </div>
            <div class="card __custom_card mb-4">
                <div class="card-body">
                    <a href="product_details.html">
                        <img class="img-fluid" src="{{ asset('front_assets/img/33.jpeg') }}" alt="Card image cap" />
                    </a>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-md-sm __btn-accent float-right">
                        Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <!--  carousel -->

    <div class="container-fluid Instagram d-flex justify-content-center align-item-center">
        <div class="container text-center">
            <h3 class="text-light font-weight-bold text-uppercase mt-4">
                Follow us on Instagram
            </h3>
            <div class="__insta-profile">
                <a href="" class="text-light">@rosemount_perfumes</a>
            </div>
            <div class="mt-3">
                <a href="" class="btn btn-lg __btn-accent ml-3"><i class="fa fa-instagram"></i> Follow on
                    Instagram</a>
            </div>
        </div>
    </div>
@endsection
