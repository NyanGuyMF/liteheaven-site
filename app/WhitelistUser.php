<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhitelistUser extends Model
{
    protected $table = 'players';
    public $timestamps = false;

    protected $primaryKey = 'name';

    protected $name;
    protected $is_whitelisted;
    protected $until;
}
