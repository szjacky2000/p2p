<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Collateral extends Model
{

    /**
     * 查看顶级分类
     * @param $data
     * @return \Illuminate\Support\Collection
     */
    public function  getCollaterals($data)
    {
        $where['pid'] = 0;
        $where['status']=1;
        $where['user_id'] = $data['user_id'];
        $data = DB::table('collaterals')->where($where)->get();
        return $data;
    }

    /**
     * 添加分类
     * @param $data
     * @return bool
     */
    public function addCollaterals($data)
    {
        $where['name'] = $data['name'];
        $where['pid'] = $data['pid'];
        $where['user_id']= $data['user_id'];
        $where['status']=1;
        $data = DB::table('collaterals')->insert($where);
        return $data;
    }

    /**
     * 更新抵押物
     * @param $data
     * @return int
     */
    public function updateCollaterals($data)
    {
        $where['name'] = $data['name'];
        $where['pid'] = $data['pid'];
        $where['user_id']= $data['user_id'];
        $where['status']=1;
        $data = DB::table('collaterals')->update($where);
        return $data;
    }

    /**
     * 设置大类
     * @param $data
     * @return int
     */
    public function setCollaterals($data)
    {
        $where['name'] = $data['name'];

        $data = DB::table('collaterals')->where('id',$data['id'])->update($where);
        return $data;
    }

    /**
     * 添加大类
     * @param $data
     * @return bool
     */
    public function insterCollaterals($data)
    {
        $where['name'] = $data['name'];
        $where['pid'] = 0;
        $where['user_id']= $data['user_id'];
        $where['status']=1;
        $data = DB::table('collaterals')->insert($where);
        return $data;
    }

}
