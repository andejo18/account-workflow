<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
    	'first_name',
    	'last_name',
    	'email',
    	'account_type_id'
    ];
}
