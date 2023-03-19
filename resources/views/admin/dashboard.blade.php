@extends('admin/layout');
@section('page_title', 'Dashboard');
@section('dashboard_select', 'active');
@section('container')
    <div class="overview-wrap">
        <h2 class="title-1">Dashboard</h2>
        <hr>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-danger bg-light  mb-3">
                    <div class="card-header h5">Overview</div>
                    <div class="card-body">
                        <h5 class="card-title text-danger">Total Products</h5>
                        <hr>
                        <p class="card-text h4">{{ $c_data }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card text-danger bg-light  mb-3">
                    <div class="card-header h5">Overview</div>
                    <div class="card-body">
                        <h5 class="card-title text-danger">Total Users</h5>
                        <hr>
                        <p class="card-text h4">{{ $a_data }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
