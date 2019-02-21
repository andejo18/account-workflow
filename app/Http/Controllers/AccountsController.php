<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function create()
    {
    	$accountTypes = \App\AccountType::get();

    	return view('accounts.create')
    		->with('accountTypes', $accountTypes);
    }

    public function store(Request $request) 
    {
    	$accountTypeIds = \App\AccountType::pluck('id')->toArray();

    	$validatedData = $request->validate([
    		'first_name' => 'required|max:255',
    		'last_name' => 'required|max:255',
    		'email' => 'required|max:255',
    		'account_type_id' => [
    			'required',
    			Rule::in($accountTypeIds)
    		]
    	]);

    	$account = new \App\Account($validatedData);
    	$account->active = false;
    	$account->save();

    	return redirect()->route('accounts.index');
    }
}
