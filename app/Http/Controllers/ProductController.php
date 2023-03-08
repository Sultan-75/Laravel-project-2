<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('admin.product');
    }

    public function manage_product()
    {
        return view('admin.manage_product');
    }
}
