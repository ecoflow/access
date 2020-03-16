<?php

namespace Ecoflow\Access\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * Fillable array.
     *
     * @var array
     */
    protected $fillable = ['name', 'desc'];

    /**
     * Permission has many Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
