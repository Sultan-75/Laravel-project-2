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

        <div class="table-responsive table--no-card m-b-30 py-2 px-2">
            <table class="table table-borderless table-striped table-earning" id="dataTableHover">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Product Image</th>
                        <th>Brand</th>
                        <th>Scent</th>
                        <th>Age Range</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>click</th>

                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->product_price }}</td>
                            <td>
                                <img width="100px" src="{{ asset('storage/media/product/' . $item->product_image) }}" />
                            </td>
                            <td>{{ $item->product_brand }}</td>
                            <td>{{ $item->product_scent }}</td>
                            <td>{{ $item->age_range }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <a href="{{ url('admin/product/status/0') }}/{{ $item->id }}"
                                        class="text-decoration-none mr-2">
                                        <button class="btn btn-success btn-sm">
                                            Active
                                        </button>
                                    </a>
                                @elseif ($item->status == 0)
                                    <a href="{{ url('admin/product/status/1') }}/{{ $item->id }}"
                                        class="text-decoration-none mr-2">
                                        <button class="btn btn-warning btn-sm">
                                            Deactive
                                        </button>
                                    </a>
                                @endif

                            </td>
                            <td>
                                <a href="{{ url('admin/product/manage_product') }}/{{ $item->id }}"
                                    class="text-decoration-none mr-2">
                                    <button class="btn btn-info">
                                        <i class="fa fa-edit fa-lg"></i>
                                    </button>
                                </a>
                                <a href="{{ url('admin/product/delete') }}/{{ $item->id }}"
                                    class="text-decoration-none">
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash fa-lg"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ $item->url }}" target="_blank"
                                    class="btn btn-warning btn-sm text-decoration-none mr-2">
                                    Click
                                </a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
