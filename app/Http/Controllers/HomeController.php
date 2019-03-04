<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_info = Auth::user();
        $request->session()->put('username', $user_info->name);
        $request->session()->put('phone', $user_info->phone);
        return view('auth.login_success');
    }

    public function info()
    {
        phpinfo();
        exit;
    }

}
