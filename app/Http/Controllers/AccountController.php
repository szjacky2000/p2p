<?php

namespace App\Http\Controllers;

use App\Models\Account;

class AccountController extends Controller
{

	protected $__account;


	public function __construct(){
		$this->__account = new Account();
	}

	public function register(){
		return view('account.register');
	}


    public function lists(){
        return $this->__account->getAll();
    }

    public function byNameGet(){
    	return $this->__account->getAll();
    }





}
