<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccountsController extends Controller
{
    public function index() 
    {
    	$accounts = \DB::table('accounts')
    		->join('account_types', 'accounts.account_type_id', '=', 'account_types.id')
    		->select('accounts.*', 'account_types.account_type')
    		->get();

    	return view('accounts.index')
    		->with('accounts', $accounts);
    }

    public function show($accountId) 
    {
        // This is bad because the relationships aren't set up.
    	$account = \DB::table('accounts')
    		->join('account_types', 'accounts.account_type_id', '=', 'account_types.id')
            ->join('account_place', 'accounts.id', '=', 'account_place.account_id')
    		->select('accounts.*', 'account_types.account_type', 'account_place.place')
    		->where('accounts.id', $accountId)
    		->get()[0];

        $availableTransitions = $this->availableTransitions($account->place);

    	return view('accounts.show', [
                'account' => $account,
                'transitions' => $availableTransitions
            ]);
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

        $accountPlace = \App\AccountPlace::create([
            'account_id' => $account->id,
            'place' => 'Confirmation',
            'version' => 0
        ]);
        $accountPlace->save();

    	return redirect()->route('accounts.index');
    }

    private function availableTransitions($place)
    {
        $transitions = \DB::table('transitions')
                            ->where('from_place', $place)
                            ->get();
        
        return $transitions;
    }
}
