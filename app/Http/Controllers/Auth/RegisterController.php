<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\RedirectResponse;

use App\Models\Verify;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'name'  => $data['name'],
            'phone' => $data['phone'],
            'idn'   => $data['idn'],
            'pay_password' => Hash::make($data['pay_password']),
            'password' => Hash::make($data['password']),
        ]);
    }

    //注册步骤1
    public function reg_1(){
        return view('auth.reg_1');
    }

    //注册步骤2
    public function reg_2(Request $request){

        if ($request->isMethod('post')) {
            $phone    = $request->input('phone');
            $password = $request->input('password');
            $code     = $phone.'=>'.$request->input('check_code');
            //验证手机号是否存在
            $request->validate([
                'phone' => 'required|unique:users',
                ]);
            if($code == Redis::get('res_info')) {
                Redis::setex('phone',    600, $phone);
                Redis::setex('password', 600, $password);
                return view('auth.reg_2');
            }else {
                echo '验证码过期或者错误.';
            }

        }
        else return Redis::get('phone') ? view('auth.reg_2') : redirect()->route('reg_1');
    }

    public function reg_3(Request $request){

        if ($request->isMethod('post')) {
            $name = $request->input('name');
            $idn = $request->input('idn');
            Redis::setex('name', 600, $name);
            Redis::setex('idn', 600, $idn);
            return view('auth.reg_3');
        }
        return view('auth.reg_3');

    }

    //企业注册
    public function reg_4(Request $request){
        return view('auth.reg_enterprise');
    }

    public function success_register(Request $request){
        if ($request->isMethod('post')) {
            $pay_password = $request->input('pay_password');
            Redis::setex('pay_password', 600, $pay_password);
            
            $data['phone']    = Redis::get('phone');
            $data['password'] = Redis::get('password');
            $data['name']     = Redis::get('name');
            $data['idn']      = Redis::get('idn');
            $data['pay_password'] = Redis::get('pay_password');
            if(is_array($data)) {
                 $this->create($data);
                return redirect()->route('login');
            }
            else return redirect()->route('reg_1');

        }else{
            return redirect()->route('login');
        }

    }


}
