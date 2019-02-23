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
//         $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home');
        if(Auth::check() == true) $this->personcenter();
        return view('index.home');
    }

    public function user_center()
    {
        // return view('home');
        return view('index.home');
    }

    public function personcenter(){
        //效验用户登录凭证
        if (isset($_COOKIE['auth'])) {
            $auth = $_COOKIE['auth'];
            $resArr = explode(":",$auth);
            $userId = (int)end($resArr);
            $row = DB::table('users')->where([['id', '=', $userId]])->first();
            $salt = 'king';//验指
            $authStr = MD5($row->phone.$row->password.$salt);    
            if($resArr[0]!==$authStr) {
                return redirect('/exit');
            }
              
        }else {
            return redirect('/exit');
        }
        
        return view('auth.login_success');
    }

}
