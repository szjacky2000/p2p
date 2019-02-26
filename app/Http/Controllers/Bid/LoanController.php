<?php

namespace App\Http\Controllers\Bid;

use App\Models\Loan;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\User;

class LoanController extends Controller
{

    const QUOTA = 200000; //个人额度为20万,企业为100万 富友规则，银行存管不详！

    public function __construct(){

	}

	public function index(){
	    return view('bidding-info.loan');
    }

    public function add(Request $request)
    {

        if ($request->isMethod('post')) {

            $loan = new Loan();

            /**
             * 查找是否已经有借             *
             **/

            if(false == Auth::check()){

                    //添加用户资料
                    $user_info['name']   = $request->input('name');
                    $user_info['addr']   = $request->input('addr');
                    $user_info['phone']  = $request->input('phone');
                    $user_info['status'] = $request->input('status');

                    if(!empty($user_info['phone'])) {

                        $res = $loan->is_phone_exists($user_info['phone']);
                        if($res == 1) return '手机号重复了！';
                        else $user_id = DB::table('users')->insertGetId($user_info);
                    }
                    else return view('bidding-info.loan');

            }else $user_id = Auth::id();

            /**
             ＊存管用户一次只能借款20万，
             * 企业一次只能借款100万
             * 借款过的不再再借
             **/

            //添加贷款数据
            $loan_info['type']    = 2; // 2个人, 1企业
            $loan_info['status']  = 1;
            $loan_info['user_id'] = $user_id;
            $loan_info['amount']  = $request->input('amount');
            $loan_info['period']  = $request->input('period');
            $loan_info['mortgage']  = $request->input('mortgage');
            $loan_info['remarks']   = '正在审核中...';

            if($loan_info['type'] == 2 && $loan_info['amount'] > 200000)  return '个人额度一次只能借款20万';
            if($loan_info['type'] == 1 && $loan_info['amount'] > 1000000) return '企业额度一次只能借款100万';
            if($loan->is_mortgage() == 1) return '你已经申请过借款了！';

            DB::table('loans')->insert($loan_info);
            return redirect('loan/list');

        }
        return view('bidding-info.list');

    }

    protected function checkQuota($user_id){
        return isset($user_id) ? true : false;
    }


    public function list(Request $request)
    {

        // search data
        if($request->isMethod('post')){
            $input = $request->all('');
        }

        return view('bidding-info.list');
    }

    //ajax list json
    public function show(Request $request)
    {
        $page   = $request->input('page');
        $limit  = $request->input('limit');
        $result = DB::table('loans')
            ->join('users', 'loans.user_id', '=', 'users.id')
            ->select('loans.*', 'users.name as name')
            ->limit($limit)
            ->orderBy('updated_at')
            ->get();

        foreach ($result as $key => $value) {
            $value->mortgage = ($value->mortgage == 1) ? '月' : '日';
        }
        return ($result) ? ['code'=>0,'count'=>count($result),'data'=>$result] : ['code'=>1];
    }

    //ajax 风控审核  1:进行中 2:审核中的 3:未通过 4:通过
    public function investigate($id)
    {
        $loan = Loan::find($id);
        $n = ($loan['status'] == 1 || $loan['status'] == 3) ? 4 : 3;
        $m = ($n == 4) ? '已审核通过' : '审核未通过';

        $loan->status  = $n;
        $loan->remarks = $m;
        $st = $loan->save();

        return ($st) ? ['message'=> 0] : ['message'=>'error'];
    }

}
