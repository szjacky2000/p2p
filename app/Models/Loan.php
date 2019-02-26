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
use Auth;
use Illuminate\Support\Facades\Validator;

class Loan extends Model
{

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name'                 => 'required', 'string', 'max:255',
            'phone'                => 'required', 'string', 'max:11',
            'password'             => 'required', 'string', 'min:6', 'confirmed',
            'password_confirmation'=>'required|alpha_num|between:6,12',
            'captcha.require'      => '验证码不能为空',
            'captcha.captcha'      => '请输入正确的验证码',
        ]);
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    private function is_name_exists($name){
        return DB::table('user')->where('name', $name)->exists();
    }

    public function is_phone_exists($phone){
        return DB::table('users')->where('phone', $phone)->exists();
    }

    //是否在登陆状态借款
    private function is_login()
    {
        return Auth::check();
    }
    
    //登陆状态是否借款
    public function is_mortgage()
    {
        return ($this->is_login()) ? DB::table('loans')->where('user_id', Auth::id())->exists() : -1;
    }

}