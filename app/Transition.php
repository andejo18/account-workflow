<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transition extends Model
{
    //
    public static $actionDeactivate = 'change active to false';
    public static $actionLogAMessage = 'log a message';
}
