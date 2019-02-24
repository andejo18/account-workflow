<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$accounts = \DB::table('accounts')
    		->join('account_types', 'accounts.account_type_id', '=', 'account_types.id')
            ->join('account_place', 'accounts.id', '=', 'account_place.account_id')
    		->select('accounts.*', 'account_types.account_type', 'account_types.cost', 'account_place.place')
    		->get();

    	$data = [
    		'revenue' => $this->getTotalRevenue($accounts),
    		'revenue_active' => $this->getTotalRevenue($accounts, true),
    		'accounts_count' => count($accounts)
    	];

    	return view('pages.dashboard')->with(['data' => $data]);
    }

    /**
    * @param array $accounts
    * @param boolean $active
    * @return decimal
    */
    private function getTotalRevenue($accounts, $active = false)
    {
    	$totalRevenue = 0.00;

    	foreach ($accounts as $account) {
    		if ((! $active) || ($active && $account->active)) {
    			$totalRevenue += $account->cost;
    		}
    	}

    	return $totalRevenue;
    }
}