<?php
/**
 * Created by PhpStorm.
 * User: jacky
 * Date: 18-12-5
 * Time: 上午10:40
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Cache;

class Verify extends Model
{

    //检查电话是否重复注册
    public function is_phone_exists($phone = '18948197961'){
        return DB::table('users')->where($phone, 1)->exists();
    }

    //检查用户名称是否重复注册
    public function is_name_exists($name = 'name'){
        return DB::table('users')->where($name, 1)->exists();
    }

    //检测用户密码是否过于简单
    public function password_difficulty($password){
        return $password;
    }

    //对于同一ip段的注册用户不能重复注册两次
    public function limit_register($client_ip){
        return $client_ip;
    }

    //检查企业名称是否已经注册
    public function company_name_exists(){
        return false;
    }

}