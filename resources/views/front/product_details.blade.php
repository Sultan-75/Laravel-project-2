@extends('front/layout')
@section('page_title', 'Product Details')
@section('container')
    <!-- Product -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="my-4 text-center __text-accent">PRODUCT DETAILS PAGE</h3>
            </div>
        </div>
        <!-- product -->
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="mb-2">
                    <img src="{{ asset('storage/media/product/' . $single_product[0]->product_image) }}" style="height: 500px"
                        class="img-fluid" alt="" />
                </div>
            </div>

            <div class="col-md-5 col-sm-12 col-xs-12 card py-2 px-3 mb-2">
                <h2 class="mt-1">{{ $single_product[0]->product_name }}</h2>
                <hr />
                <h3 class="">AED {{ $single_product[0]->product_price }}</h3>
                <hr />

                <div class="clearfix my-1 border-bottom border-light">
                    <h6 class="float-left">Product Brand</h6>
                    <h6 class="float-right">{{ $single_product[0]->product_brand }}</h6>
                </div>
                <div class="clearfix my-1 border-bottom border-light">
                    <h6 class="float-left">Product category / Scent</h6>
                    <h6 class="float-right">{{ $single_product[0]->product_scent }}</h6>
                </div>
                <div class="clearfix my-1 border-bottom border-light">
                    <h6 class="float-left">Age Range</h6>
                    <h6 class="float-right">{{ $single_product[0]->age_range }}</h6>
                </div>

                <hr />
                <a href="{{ $single_product[0]->url }}" class="btn btn-danger mb-3">SHOP NOW</a>
            </div>
        </div>
        <!-- end product -->
    </div>
@endsection
