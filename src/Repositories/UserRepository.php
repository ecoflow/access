<?php

namespace Ecoflow\Access\Repositories;

use Ecoflow\Access\Models\User;
use Ecoflow\Core\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new User());
    }
}
