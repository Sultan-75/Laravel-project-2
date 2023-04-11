@extends('admin/layout')
@section('page_title', 'Manage Product')
@section('product_select-2', 'active')
@section('container')
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4 mt-2 mb-2">Manage Products</h1>
                <hr>
                <div class="card">
                    <h5 class="card-header font-weight-light">Add Products</h5>
                    <div class="card-body">
                        <form action="{{ route('product.manage_product_process') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <label for="product_name" class="control-label mb-1 font-weight-bold">Product Name or
                                        Title</label>
                                    <input id="product_name" name="product_name" type="text" value="{{ $product_name }}"
                                        class="form-control" aria-required="true" aria-invalid="false" required />
                                </div>
                                <div class="col">
                                    <label for="product_price" class="control-label mb-1 font-weight-bold">Product
                                        Price</label>
                                    <input id="product_price" name="product_price" type="text"
                                        value="{{ $product_price }}" class="form-control" aria-required="true"
                                        aria-invalid="false" required />
                                </div>
                                <div class="col">
                                    <label for="product_image" class="control-label mb-1 font-weight-bold">Product
                                        Image</label>
                                    <input id="product_image" name="product_image" type="file"
                                        value="{{ $product_image }}" class="form-control" aria-required="true"
                                        aria-invalid="false" />
                                    @if ($product_image != '')
                                        <a href="{{ asset('storage/media/product/' . $product_image) }}"
                                            target="_blank"><img width="100px"
                                                src="{{ asset('storage/media/product/' . $product_image) }}" /></a>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row mt-2 mb-2">
                                <div class="col">
                                    <label for="product_brand" class="control-label mb-1 font-weight-bold">Product
                                        Brand</label>
                                    <input id="product_brand" name="product_brand" type="text"
                                        value="{{ $product_brand }}" class="form-control" aria-required="true"
                                        aria-invalid="false" required />
                                </div>
                                <div class="col">
                                    <label for="product_scent" class="control-label mb-1 font-weight-bold">Product
                                        Scent</label>
                                    <input id="product_scent" name="product_scent" type="text"
                                        value="{{ $product_scent }}" class="form-control" aria-required="true"
                                        aria-invalid="false" required />
                                </div>
                                <div class="col">
                                    <label for="age_range" class="control-label mb-1 font-weight-bold">Age Range</label>
                                    <input id="age_range" name="age_range" type="text" value="{{ $age_range }}"
                                        class="form-control" aria-required="true" aria-invalid="false" required />
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <div class="col">
                                    <label for="url" class="control-label mb-1 font-weight-bold">Amazon Url
                                        Link</label>
                                    <input id="url" name="url" type="text" value="{{ $url }}"
                                        class="form-control" aria-required="true" aria-invalid="false" required />
                                    <input type="hidden" name="id" value="{{ $id }}">
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <button type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-send fa-lg"></i>&nbsp;
                                    <span>SUBMIT</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
