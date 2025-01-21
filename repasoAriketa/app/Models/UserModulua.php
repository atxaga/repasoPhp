<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserModulua extends Pivot
{
    protected $table = 'modulua_user';

    protected $fillable = [
        'user_id',
        'modulua_id',
    ];
}
