<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Depart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'depart_name', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    public function list() {
        $data = DB::table('depart')->orderBy('id', 'desc')->get()->map(function ($value) {
            return (array)$value;
        })->toArray();
        return $data;
    }

    public function add($param){
        $data = DB::table('depart')->insert(['depart_name' => $param]); 
        return $data;
    }

    public function del($id){
        $data = DB::table('depart')->where('id', $id)->delete();
        return $data;
    }

    public function edit($param){
        $data = DB::table('depart')->where('id', $param['id'])->update(['depart_name' => $param['depart_name']]);
        return $data;
    }
    
}
