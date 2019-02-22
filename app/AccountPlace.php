<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountPlace extends Model
{
    protected $table = 'account_place';

    protected $fillable = [
    	'account_id',
    	'place',
    	'version'
    ];
}
