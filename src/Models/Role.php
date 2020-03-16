<?php

namespace Ecoflow\Access\Models;

use Ecoflow\Access\Models\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = ['name', 'desc'];

    /**
     * Role has many users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Role belongs to many Permission.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
