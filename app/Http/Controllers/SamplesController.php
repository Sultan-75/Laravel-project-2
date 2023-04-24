<?php

namespace App\Http\Controllers;

use App\Models\Samples;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SamplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { {
            $result['data'] = Samples::all();
            return view('admin.sample', $result);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_sample()
    {
        return view('admin.manage_sample');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function manage_sample_process(Request $request)
    {
        if ($request->hasfile('image')) {
            $msg = "Product Inserted";
            $model = new Samples();
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/sample', $image_name);
            $model->image = $image_name;
            $model->save();
            $request->session()->flash('message', $msg);
            return redirect('admin/sample');
        }
    }

    public function delete(Request $request, $id)
    {
        $model = Samples::find($id);
        Storage::delete("/public/media/sample/" . $model->image);
        $model->delete();
        $request->session()->flash('message', 'Images deleted');
        return redirect('admin/sample');
    }
}
