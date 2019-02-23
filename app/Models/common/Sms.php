<?php

namespace App\Models\common;

use Illuminate\Database\Eloquent\Model;
use Qcloud\Sms\SmsSingleSender;

class Sms extends Model
{
    private  $appid        =  1400159925;
    private  $appkey       =  'd3d1bb323ac80f3f7ca72762cc94c390';

    //公司申请短信接口签名
    private  $smsSign      =  '金抽屉';

    //0 注册发送短信模版
    private  $templateId   =  [
        '1' => '225047',
        '2' => '235234',
    ];

    protected $code = 0;

    public function setCode(){
        $this->code = rand(100000, 999999);
    }

    public function getCode(){
        return $this->code;
    }

    public function __construct()
    {
        parent::__construct();
        $this->setCode();
    }

    /**
     * @param  int  $tid  短信模板号
     * @param  string $phone 发送给客户的手机终端
     * @param  int  $second 短信的过期时间
     * @return string 应答json字符串
     */
    public function send($phone, $tid = 0, $second = 60){

        try {
            $ssender = new SmsSingleSender($this->appid, $this->appkey);
            $params  = [
                $this->getCode(),
                $second
            ];
            $result  = $ssender->sendWithParam(
                '86',
                $phone,
                $this->templateId[$tid],
                $params,
                $this->smsSign,
                '',
                ''
            );

            if($result){
                return $this->getCode();
            }else{
                return false;
            }

        } catch(\Exception $e) {
//            echo var_dump($e);
            return $phone. ' sms send fail';
        }

    }
}
