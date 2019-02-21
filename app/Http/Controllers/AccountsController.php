<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function index() 
    {
    	return view('accounts.index')
    		->with('accounts', \App\Account::get());
    }

    public function show($accountId) 
    {
    	return view('accounts.show')
    		->with('account', \App\Account::findOrFail($accountId));
    }
}
