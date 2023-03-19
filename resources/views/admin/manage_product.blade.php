@extends('admin/layout');
@section('page_title', 'Manage Product');
@section('product_select-2', 'active');
@section('container')
    <div class="overview-wrap mb-3 col-md-12">
        <h2 class="title-1">Manage Product</h2>
        <a href="{{ url('admin/product') }}" class="text-decoration-none">
            <button class="au-btn au-btn-icon au-btn--blue">
                Show All Products
            </button>
        </a>
    </div>
    <div class="col-md-12">
        <form action="{{ route('product.manage_product_process') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Product Info</h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="product_name" class="control-label mb-1">Product Name or Title</label>
                                <input id="product_name" name="product_name" type="text" value="{{ $product_name }}"
                                    class="form-control" aria-required="true" aria-invalid="false" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_price" class="control-label mb-1">Product Price</label>
                                <input id="product_price" name="product_price" type="text" value="{{ $product_price }}"
                                    class="form-control" aria-required="true" aria-invalid="false" required>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_image" class="control-label mb-1">Product Image</label>
                                <input id="product_image" name="product_image" type="file" value="{{ $product_image }}"
                                    class="form-control" aria-required="true" aria-invalid="false">
                                @if ($product_image != '')
                                    <a href="{{ asset('storage/media/product/' . $product_image) }}" target="_blank"><img
                                            width="100px"
                                            src="{{ asset('storage/media/product/' . $product_image) }}" /></a>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="product_brand" class="control-label mb-1">Product Brand</label>
                                <input id="product_brand" name="product_brand" type="text" value="{{ $product_brand }}"
                                    class="form-control" aria-required="true" aria-invalid="false" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="product_scent" class="control-label mb-1">Product Scent</label>
                                <input id="product_scent" name="product_scent" type="text" value="{{ $product_scent }}"
                                    class="form-control" aria-required="true" aria-invalid="false" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="age_range" class="control-label mb-1">Age Range</label>
                                <input id="age_range" name="age_range" type="text" value="{{ $age_range }}"
                                    class="form-control" aria-required="true" aria-invalid="false" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $id }}">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-send fa-lg"></i>&nbsp;
                    <span>Submit</span>
                </button>
            </div>
        </form>

    </div>
@endsection
