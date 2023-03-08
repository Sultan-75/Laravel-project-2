@extends('admin/layout');
@section('page_title', 'Manage Product');
@section('product_select', 'active');
@section('container')
    <div class="overview-wrap mb-3 col-md-12">
        <h2 class="title-1">Manage Product</h2>
        <a href="{{ url('admin/product') }}" class="text-decoration-none">
            <button class="au-btn au-btn-icon au-btn--blue">
                All Product
            </button>
        </a>
    </div>
    <div class="col-md-12">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Add Product</h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="control-label mb-1">Product Name</label>
                                <input id="name" name="name" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="slug" class="control-label mb-1">Product Slug</label>
                                <input id="slug" name="slug" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image" class="control-label mb-1">Product Image</label>
                                <input id="image" name="image" type="file" class="form-control"
                                    aria-required="true" aria-invalid="false">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id" class="control-label mb-1">Category</label>
                                <select id="category_id" name="category_id"class="form-control"required>
                                    <option value="">Select Categories</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="brand" class="control-label mb-1">Product Brand</label>
                                <input id="brand" name="brand" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="model" class="control-label mb-1">Product Model</label>
                                <input id="model" name="model" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="decs" class="control-label mb-1">Product Short Description</label>
                                <input id="decs" name="decs" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id">
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
