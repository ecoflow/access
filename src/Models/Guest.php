<?php

namespace Ecoflow\Access\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = [ 'name', 'desc' ];
}
