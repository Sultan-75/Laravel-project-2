@extends('front/layout')
@section('page_title', 'Fragrances')
@section('container')
    <!-- Product -->
    <div class="container my-2">
        <div class="row">
            <div class="col-md-12 mb-2 mt-1">
                <h3 class="text-center"> Fragrances - French</h3>
            </div>
        </div>
        <hr>
        <div class="row">
            @foreach ($all_product as $list)
                <div class="col-md-4">
                    <a href="{{ url('/product/details') }}/{{ $list->id }}" class="text-decoration-none">
                        <div class="w-75 mx-auto card __custom_card card-block px-3 pt-3 pb-1 my-3">
                            <img class="mb-0 img-fluid" style="height: 280px;width: 300px;"
                                src="{{ asset('storage/media/product/' . $list->product_image) }}" alt="Product-image" />
                            <div class="card-body mt-0">
                                <p class="card-title my-1">{{ $list->product_name }}</p>
                                <div class="d-flex justify-content-between">
                                    <div class="text-danger">AED {{ $list->product_price }}</div>
                                    <a href="{{ $list->url }}" target="_blank" class="btn __btn-accent px-2 py-1">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
