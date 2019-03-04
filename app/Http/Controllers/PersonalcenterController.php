<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\Models\Bank;

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

    /** ajax add bank information
    ** 0  数据正常被添加
    ** 1  添加数据发生错误
    ** 2  银行号已被重复使用
    **  
    **/

    public function bank_add(Request $request)
    {
    	if($request->isMethod('post')){

    		$data = $request->all();

    		if(!isset($data['num']) && empty($data['num'])) return 0;

    		$bank = new Bank;
    		$res = $bank->is_exists($data['num']);
    		if($res == 1) return 2;

	        $data['user_id']= Auth::id();
	        unset($data['_token']);
	        unset($data['code']);
	        $st = DB::table('banks')->insert($data); 
	    	return ($st == 1) ? -1 : 1;

    	}else{

    		return 0;

    	}


    }


}
