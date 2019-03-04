<?php
/**
 * Created by PhpStorm.
 * User: jacky
 * Date: 19-1-11
 * Time: 下午2:14
 *
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Auth;

class Bank extends Model
{

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name'          => 'required', 'string', 'max:35',
            'num'           => 'required', 'alpha_num', 'max:20','min:4',
            'opening_bank'  => 'required', 'string', 'max:100',
        ]);
    }

    public function is_exists($num)
    {
        return DB::table('banks')->where('num', $num)->exists();
    }

    //是否在登陆状态借款
    private function is_login()
    {
        return Auth::check();
    }

    public function lists()
    {
        return DB::table('banks')->where('user_id', Auth::id())->get();
    }

}