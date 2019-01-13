<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function group() {
        return $this->belongsTo('App\Models\Group\Group');
    }
}
