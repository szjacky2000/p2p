<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;

class LoginController extends CommonController
{
    public function __construct(){}

    public function index(){
        return 'Backstage Login index';
    }

    public function test(){
        return 'backstage login test';
    }

    public function quit(){
        session(['user'=> null]);
        return redirect('admin/login');
    }


}
