<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;


class ModuleController extends Controller
{

	protected $__module;

	public function __construct(){
		$this->__module = new Module();
	}

    public function lists(){
    	$ms = $this->__module->getModule();
    	return view('layouts.sidebar', ['modules' => $ms]);
    }

    public function remove(Request $request){
	    $id = $request->post('id');
        $st = ($this->__module->find($id)) ? $this->__module->delete() : false;
    }

}
