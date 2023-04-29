@extends('admin/layout')
@section('page_title', 'Sample Product')
@section('product_select', 'active')
@section('container')
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">All Sample Products</h1>
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
                                <th>Product Image</th>
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

                                    <td>
                                        <img width="100px" src="{{ asset('storage/media/sample/' . $item->image) }}" />
                                    </td>

                                    <td>
                                        <a href="{{ url('admin/sample/delete') }}/{{ $item->id }}"
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
