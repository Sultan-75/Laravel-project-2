<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $result['data'] = Product::all();
        return view('admin.product', $result);
    }

    public function manage_product(Request $request, $id = '')
    {
        if ($id > 0) {
            $arr = Product::where(['id' => $id])->get();
            $result['product_name'] = $arr['0']->product_name;
            $result['product_price'] = $arr['0']->product_price;
            $result['product_image'] = $arr['0']->product_image;
            $result['product_brand'] = $arr['0']->product_brand;
            $result['product_scent'] = $arr['0']->product_scent;
            $result['age_range'] = $arr['0']->age_range;
            $result['id'] = $arr['0']->id;
        } else {
            $result['product_name'] = '';
            $result['product_price'] = '';
            $result['product_image'] = '';
            $result['product_brand'] = "";
            $result['product_scent'] = "";
            $result['age_range'] = "";
            $result['id'] = 0;
        }
        return view('admin.manage_product', $result);
    }
    public function manage_product_process(Request $request)
    {

        if ($request->post('id') > 0) {
            $model = Product::find($request->post('id'));
            $msg = "Product Updated";
        } else {
            $model = new Product();
            $msg = "Product Inserted";
        }
        if ($request->hasfile('product_image')) {

            if ($request->post('id') > 0) {
                $arrImage = DB::table('products')->where(['id' => $request->post('id')])->get();
                if (Storage::exists('/public/media/product/' . $arrImage[0]->product_image)) {
                    Storage::delete('/public/media/product/' . $arrImage[0]->product_image);
                }
            }

            $image = $request->file('product_image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/product', $image_name);
            $model->product_image = $image_name;
        }

        $model->product_name = $request->post('product_name');
        $model->product_price = $request->post('product_price');
        $model->product_brand = $request->post('product_brand');
        $model->product_scent = $request->post('product_scent');
        $model->age_range = $request->post('age_range');
        $model->status = 1;
        $model->save();
        $request->session()->flash('message', $msg);
        return redirect('admin/product');
    }
    public function delete(Request $request, $id)
    {
        $model = Product::find($id);
        Storage::delete("/public/media/product/" . $model->product_image);
        $model->delete();
        $request->session()->flash('message', 'Product deleted');
        return redirect('admin/product');
    }

    public function status(Request $request, $status, $id)
    {
        $model = Product::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message', 'Product status updated');
        return redirect('admin/product');
    }
}
