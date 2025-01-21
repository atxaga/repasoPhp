<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulua extends Model
{
    protected $table = 'moduluak';

    protected $fillable = [
        'izena',
        'gela'
    ];

    public function users() {
        return $this->belongsToMany(User::class)
                    ->using(UserModulua::class)
                    ->withPivot('user_id', 'modulua_id')
                    ->withTimestamps();
    }
}
