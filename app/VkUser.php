<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VkUser extends Model
{
    /** The table associated with model. */
    protected $table = 'vk_users';

    /** Indicates if the model should be timestamped. @var bool */
    public $timestamps = false;

    /** The connection name for the model in config/database.php */
    protected $connection = 'vk_bot';

    protected $vk_id;

    protected $permissions;
}
