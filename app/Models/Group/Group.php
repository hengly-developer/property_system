<?php

namespace App\Models\Group;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_groups';

    /**
     * Which users are in this group
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user() {
        return $this->hasMany('App\Models\Users\User');
    }

    /**
     * Which permissions are in this group
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permission() {
        return $this->hasMany('App\Models\Permission\Permission');
    }
}
