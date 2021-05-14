<?php

namespace Ecoflow\Access\Controllers\Role;

use Ecoflow\Access\Models\Role;
use App\Http\Controllers\Controller;
use Ecoflow\Access\Repositories\RoleRepository;
use Illuminate\Database\Eloquent\Collection;

class RoleController extends Controller
{

    /**
     * Role repository
     *
     * @var RoleController
     */
    protected RoleRepository $roleRepository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->roleRepository = new RoleRepository();
    }

    /**
     * Return all records
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->roleRepository->all();
    }

    /**
     * Show a record
     *
     * @return Role
     */
    public function show($match): Role
    {
        return $this->roleRepository->find($match);
    }

    /**
     * create
     *
     * @param array $attributes
     * @return Role
     */
    public function create(array $attributes): Role
    {
        return $this->roleRepository->create($attributes);
    }

    /**
     * delete
     *
     * @param string $id
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->roleRepository->delete($id);
    }
}
