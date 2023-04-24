<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        $result = Auth::where(['email' => $email, 'password' => $password])->get();
        if (isset($result['0']->id)) {
            $request->session()->put('ADMIN_LOGIN', true);
            $request->session()->put('ADMIN_ID', $result['0']->id);
            $request->session()->put('ADMIN_NAME', $result['0']->name);
            return redirect('admin/dashboard');
        } else {
            $request->session()->flash('error', 'Invalid Login');
            return redirect('admin');
        }
    }
    public function dashboard()
    {
        $result['c_data'] = DB::table('products')->count();
        $result['a_data'] = DB::table('auths')->count();
        $result['s_data'] = DB::table('samples')->count();
        return view('admin.dashboard', $result);
    }
}
