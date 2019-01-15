<?php

/**
 * Manage all app users at the backend
 */

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_app_users';

    /**
     * Which group this user belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group() {
        return $this->belongsTo('App\Models\Group\Group');
    }
}
