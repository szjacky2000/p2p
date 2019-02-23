<?php
namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;

use App\Models\Depart;
use Illuminate\Support\Facades\DB;
class DepartmentController extends CommonController
{
    protected   $model;

    public function __construct()
    {
        $this->model = new Depart();
    }

    //查
    public function list(Request $request){
        
        $data = $this->model->list();
        return view('Backstage.list',compact('data'));
    }
    //增
    public function add(Request $request){
        if ($request->isMethod('post')) {
            
            $param = $request->input('depart_name');
            $this->model->add($param);
        }
        return view('Backstage.add');
    }
    //删
    public function del(Request $request){
        $id = $request->input('id');
        $this->model->del($id);
        return redirect('Backstage/list');
    }
    //改
    public function edit(Request $request){

        $id = $request->input('id');
        $data = DB::table('depart')->where('id', $id)->first();
        if ($request->isMethod('post')) {
            $param['id'] = $request->input('id');
            $param['depart_name'] = $request->input('depart_name');
            $this->model->edit($param);

            return redirect('Backstage/list');
        }
        return view('Backstage.edit',compact('data'));
    }
}
