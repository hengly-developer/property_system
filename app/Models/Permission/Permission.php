<?php

namespace App\Models\Permission;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_permissions';

    /**
     * Which group this permission belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group() {
        return $this->belongsTo('App\Models\Group\Group');
    }
}
