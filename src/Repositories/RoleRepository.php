<?php

namespace Ecoflow\Access\Repositories;

use Ecoflow\Access\Models\Role;
use Ecoflow\Core\Repositories\BaseRepository;

class RoleRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Role());
    }
}
