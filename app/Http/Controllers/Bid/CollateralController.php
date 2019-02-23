<?php

namespace App\Http\Controllers\Bid;

use App\Http\Controllers\Controller;
use App\Models\Collateral;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class CollateralController extends Controller
{


    public function __construct(){

//        $this->middleware('auth');

	}

	public function show(){
        //$collaterals = Collateral::where('user_id', Auth::id())->get();
        $model = new Collateral();
        $collaterals = $model->getCollaterals(['user_id'=>Auth::id()]);
	    return view('bidding-info.collateral', compact('collaterals'));

    }


    /**
     * 添加子类
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(Request $request){
	    $data = $request->post();
        $data['user_id']= Auth::id();
        $model = new Collateral();
        $collaterals = $model->addCollaterals($data);
        var_dump($collaterals);die();
        return view('bid.add');
    }

    public function update(Request $request){

        $data = $request->post();
        $where['user_id']= Auth::id();
        $model = new Collateral();
        $collaterals = $model->updateCollaterals($data);
        var_dump($collaterals);die();
        return view('bid.upate');
    }

    public function remove(){
        return view('bid.remove');
    }


    public function getCollaterals(Request $request)
    {
        $data = $request->post();
        $where['status'] = 1;
        $where['pid'] = 0;
        $where['user_id']= Auth::id();
//        $where['pid']=$data['id'];
        $model = DB::table('collaterals')->where($where)->select('name','id')->get();
        return view('bidding-info.collateral', compact('collaterals'));
    }


    public function delCollateral(Request $request)
    {
        $id = $request->post('id');
       $res=DB::table('collaterals')->where('id',$id)->update(['status'=>-1]);
       if ($res){
           return json_encode(['status'=>'success','msg'=>'删除成功']);
       }else{
           return json_encode(['status'=>'error','msg'=>'删除失败']);
       }
    }


    public function setCollaterals(Request $request)
    {
        $data = $request->post();
        //var_dump($data);exit();
        $model = new Collateral();
        $res = $model->setCollaterals($data);
        if ($res){
            return json_encode(['status'=>'success','msg'=>'修改成功']);
        }else{
            return json_encode(['status'=>'error','msg'=>'修改失败']);
        }
    }

    public function addConllaterals(Request $request){
        $data = $request->post();
        $data['user_id']= Auth::id();
        $model = new Collateral();
        $res = $model->insterCollaterals($data);
        if ($res){
            return json_encode(['status'=>'success','msg'=>'添加成功']);
        }else{
            return json_encode(['status'=>'error','msg'=>'添加失败']);
        }
    }


}
