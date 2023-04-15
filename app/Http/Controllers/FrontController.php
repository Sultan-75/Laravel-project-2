<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $result['home_product'] = DB::table('products')
            ->where(['status' => 1])
            ->get();
        return view('front.index', $result);
    }
    public function about()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function products()
    {
        $result['all_product'] = DB::table('products')
            ->where(['status' => 1])
            ->get();
        return view('front.products', $result);
    }
}
