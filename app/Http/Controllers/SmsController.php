<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;


class SmsController extends Controller
{

    private $register_session_key = 'res_info';

    public function send(Request $request){

        $phone        = $request->post('phone');
        $templateId   = $request->post('templateId');
        $expire_time  = $request->post('expire_time');

        if($phone && $templateId){
            $sms = new \App\Models\common\Sms();
            $res = $sms->send($phone, $templateId,  $expire_time);
            Redis::setex( $this->register_session_key , $expire_time , $phone . '=>' . $res );
            return response()->json(['success' => true, 'message'=> $phone . '=>' . $res]);

        }else{
            return response()->json(['message' => '发送失败']);
        }
    }

}
