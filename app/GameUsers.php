<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameUsers extends Model
{
    //

    protected $fillable = array('user_key', 'game_name', 'provider_name');
}
