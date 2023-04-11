@extends('admin/layout')
@section('page_title', 'Dashboard')
@section('dashboard_select', 'active')
@section('container')
    <!-- MAIN -->

    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">Dashboard</h1>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header font-weight-light">Products</h5>
                            <div class="card-body">
                                <ul>
                                    <li>JQuery</li>
                                    <li>Bootstrap 4.3</li>
                                    <li>FontAwesome</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-danger bg-light  mb-3">
                            <div class="card-header h5">Overview</div>
                            <div class="card-body">
                                <h5 class="card-title text-danger">Total Products</h5>
                                <hr>
                                <p class="card-text h4">{{ $c_data }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
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
        </div>
    </div>
    <!-- Main Col END -->
@endsection
