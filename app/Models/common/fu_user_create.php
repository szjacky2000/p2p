<?php

/* 富友个人开户 API */
class Person
{

    private $api_uri  = 'https://'; //富友用户创建接口
    private $mchnt_cd = '0000001F0600001'; // 商户号

    public function getPrame()
    {

        // 必填(M) 接口请求参数
        $data = ['ver']             = '1.00';                       // 接口版本号
        $data = ['code']            = 'regUserByFive';              // 接口编号
        $data = ['mchnt_cd']        = '0000001F0600001';            // 商户号
        $data = ['mchnt_txn_ssn']   = $this->gereteCode();
        $data = ['client_tp']       = 0;                            // 网页类型
        $data = ['usr_attr']        = 1;                            // 用户属性
        $data = ['page_notify_uri'] = 'http://192.168.1.186/get/userinfo';  // 商户form提交返回地址
        $data = ['back_notify_uri'] = 'http://192.168.1.186/get/userinfo';  // 商户后台通知地址
        $data = ['contract_st']     = 1;  //1-四码认证通过 1; 2-解绑
        /*
            格式:010000000000 01000000000
            0-未授权、1-已授权; 0(表示已授
            权限数值占位说明: 权自动还款)
            第 1 位:自动投资
            第 2 位:自动还款
            第 3 位:自动代偿还款
            第 4 位:自动缴费
            第 5-12 位预留占位
        */
        $data = ['auth_st'] = '010000000000';  // 商授权状态
        $data = ['back_notify_uri'] = 'http://192.168.1.186/get/userinfo';  // 商户后台通知地址
        $data = ['certif_tp']       = 0; //可选项(O) 证件类型 0:身份证
        $data = ['certif_id']       = '420982198404110075'; //可选项(O) 证件号码
        $private_key_path = '../key/pbkey.key';
        $signature = $this->rsaSign($data, $private_key_path);
        return $signature;
    }



    // 交易流水码
    private function gereteCode(){
        $number = date('ymd').substr(time(), -5).
            substr(microtime(), 2, 5);
        return $number;
    }



    private function rsaSign($data, $private_key_path)
    {
        $priKey = file_get_contents($private_key_path);
        $res    = openssl_get_privatekey($priKey);
        openssl_sign($data, $sign, $res);
        openssl_free_key($res);
        //base64编码
        $sign = base64_encode($sign);
        return $sign;
    }

}