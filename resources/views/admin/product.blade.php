@extends('admin/layout');
@section('page_title', 'Product');
@section('product_select', 'active');
@section('container')
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">All Products</h1>
                <hr>
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('message') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="card table-responsive mb-3 py-2 px-2">
                    <table class="table table-borderless table-striped" id="dataTableHover">
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
                                        <img width="100px"
                                            src="{{ asset('storage/media/product/' . $item->product_image) }}" />
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
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
