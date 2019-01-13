<?php

namespace App\Models\Group;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function user() {
        return $this->hasMany('App\Models\Users\User');
    }

    public function permission() {
        return $this->hasMany('App\Models\Permission\Permission');
    }
}
