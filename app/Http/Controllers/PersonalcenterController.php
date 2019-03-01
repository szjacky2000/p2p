<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class PersonalcenterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('personal-center.index');
    }

    public function bank_add(Request $request)
    {
    	$data = $request->all();

        $data['user_id']= Auth::id();
        unset($data['_token']);
        unset($data['code']);

        $st = DB::table('banks')->insert($data); 
    	return ($st == 1) ? -1 : 1;
    }


}
