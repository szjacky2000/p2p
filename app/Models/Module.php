<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Cache;



class Module extends Model
{
    protected $modules = [];

    public function get(){

        return Model::where('status',1)->get(['id','name','pid','url']);

        /*
                if (Cache::has('modules')) {
                    return Cache::get('modules');
                }else{
                    $ms = Cache::rememberForever('modules', function() {
                        return Model::where('status',1)->get(['id','name','pid','url']);
                    });
                    return $ms;
                }*/

    }

}
