<?php

namespace App\Models\Permission;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function group() {
        return $this->belongsTo('App\Models\Group\Group');
    }
}
