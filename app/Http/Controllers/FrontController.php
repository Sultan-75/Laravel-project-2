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
        $result['sample_product'] = DB::table('samples')
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
    public function products(Request $request)
    {
        $search = $request['search'];
        if ($search != "") {
            $result['all_product'] = DB::table('products')
                ->where('product_name', 'LIKE', "%$search%")
                ->get();
        } else {
            $result['all_product'] = DB::table('products')
                ->where(['status' => 1])
                ->get();
        }
        return view('front.products', $result);
    }
    public function product_details($id)
    {
        $result['single_product'] = DB::table('products')
            ->where(['id' => $id])
            ->get();
        return view('front.product_details', $result);
    }
    public function oriental()
    {
        $result['all_product'] = DB::table('products')
            ->where(['product_scent' => 'Orientel'])
            ->get();
        return view('front.oriental', $result);
    }
    public function french()
    {
        $result['all_product'] = DB::table('products')
            ->where(['product_scent' => 'French'])
            ->get();
        return view('front.oriental', $result);
    }
}
