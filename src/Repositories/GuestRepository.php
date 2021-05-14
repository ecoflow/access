<?php

namespace Ecoflow\Access\Repositories;

use Ecoflow\Access\Models\Guest;
use Ecoflow\Core\Repositories\BaseRepository;

class GuestRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Guest());
    }
}
