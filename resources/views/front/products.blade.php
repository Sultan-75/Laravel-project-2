@extends('front/layout')
@section('page_title', 'Products')
@section('container')
    <!-- Product -->
    <div class="container my-2">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">All products</h3>
            </div>
            <div class="col-md-12 text-center">
                <input type="search" class="px-3 py-1 border-0 mr-1" name="" id=""><input type="submit"
                    class="btn btn-success" value="Search">
            </div>
        </div>
        <div class="row">
            @foreach ($all_product as $list)
                <div class="col-md-4">
                    <a href="{{ url('/product/details') }}/{{ $list->id }}" class="text-decoration-none">
                        <div class="w-75 mx-auto card __custom_card card-block px-3 pt-3 pb-1 my-3">
                            <img class="mb-0 img-fluid" src="{{ asset('storage/media/product/' . $list->product_image) }}"
                                alt="Product-image" style="height:300px" />
                            <div class="card-body mt-0">
                                <p class="card-title my-1">{{ $list->product_name }}</p>
                                <div class="d-flex justify-content-between">
                                    <p class="text-danger">AED{{ $list->product_price }}</p>
                                    <a href="{{ $list->url }}" target="_blank" class="btn btn-primary">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
