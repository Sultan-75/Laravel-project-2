@extends('admin/layout')
@section('page_title', 'Sample Product')
@section('product_select-2', 'active')
@section('container')
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4 mt-2 mb-2">Sample Products</h1>
                <hr>
                <div class="card">
                    <h5 class="card-header font-weight-light">Add Products</h5>
                    <div class="card-body">
                        <form action="{{ route('sample.manage_sample_process') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">

                                <div class="col">
                                    <label for="image" class="control-label mb-1 font-weight-bold">Sample
                                        Image</label>
                                    <input id="image" name="image" type="file" value="" class="form-control"
                                        aria-required="true" aria-invalid="false" />

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
