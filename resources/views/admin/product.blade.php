@extends('admin/layout');
@section('page_title', 'Product');
@section('product_select', 'active');
@section('container')
    <div class="overview-wrap mb-3 col-md-12">
        <h2 class="title-1">Product</h2>
        <a href="{{ url('admin/product/manage_product') }}" class="text-decoration-none">
            <button class="au-btn au-btn-icon au-btn--blue">
                <i class="fa fa-plus"></i>Add Product
            </button>
        </a>
    </div>
    <div class="col-md-12">
        @if (session()->has('message'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>{{ session('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="table-responsive table--no-card m-b-30 py-1 px-1">
            <table class="table table-borderless table-striped table-earning" id="dataTableHover">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Size</th>
                        <th>Product Image</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <td>1</td>
                        <td>11</td>
                        <td>22</td>
                        <td>22</td>
                        <td>22</td>
                        <td>22</td>
                        <td>

                            222
                        </td>
                        <td>
                            <a href="" class="text-decoration-none mr-2">
                                <button class="btn btn-info">
                                    <i class="fa fa-edit fa-lg"></i>
                                </button>
                            </a>
                            <a href="" class="text-decoration-none">
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash fa-lg"></i>
                                </button>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
