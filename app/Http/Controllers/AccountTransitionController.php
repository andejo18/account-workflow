<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountTransitionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  int $accountId
     * @param  string $transition
     * @return \Illuminate\Http\Response
     */
    public function store($accountId, $transition)
    {
        // Maybe this should be taking in a post as well.

        //Transition account!
        $transition = \App\Transition::where('name', '=', $transition)
                            ->get()[0];

        $this->updatePlace($accountId, $transition->to_place);

        $this->executeAction($accountId, $transition->action);
        
        return redirect()->route('accounts.show', ['id' => $accountId]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $accountId
     * @param  string $transition
     * @return \Illuminate\Http\Response
     */
    public function show($accountId, $transition)
    {
        return view('accounts.transition.show', [
                    'account_id' => $accountId,
                    'transition' => $transition
                ]);
    }

    /**
    * @param int $accountId
    * @param string $destination
    */
    private function updatePlace($accountId, $destination)
    {
        // TODO - Figure out why this is not working
        // $accountPlace->place = $transition->to_place;
        // $accountPlace->save();

        \App\AccountPlace::where('account_id', '=', $accountId)
            ->update(['place' => $destination]);
    }

    /**
    * @param int $accountId
    * @param string $action
    */
    private function executeAction($accountId, $action)
    {
        // TODO log a message for every action.
        switch ($action) {
            case \App\Transition::$actionDeactivate:
                $this->deactivateAccount($accountId);
                break;
            case \App\Transition::$actionLogAMessage:
                $this->logMessage();
                break;
            default:
                throw new Exception('Action requires new handling.');
        }
    }

    /**
    * @param string $message
    */
    private function deactivateAccount($accountId)
    {
        \App\Account::where('id', '=', $accountId)
            ->update(['active' => 0]);
    }

    /**
    * @param string $message
    */
    private function logMessage($message = '')
    {

    }
}
