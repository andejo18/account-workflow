<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'account:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an account';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $firstName = $this->ask('Enter the first name on the account');

        $lastName = $this->ask('Enter the last name on the account');

        $email = $this->ask('Enter the email on the account');

        $headers = ['Id', 'Account Type'];
        $accountTypes = \App\AccountType::all(['id', 'account_type'])->toArray();
        $this->table($headers, $accountTypes);

        $accountType = $this->ask('Enter the account\'s type ID');

        // TODO Validate data

        $account = new \App\Account;
        $account->first_name = $firstName;
        $account->last_name = $lastName;
        $account->email = $email;
        // Using the id.
        $account->account_type_id = $accountType;
        // Default
        $account->active = false;

        $account->save();
    }
}
