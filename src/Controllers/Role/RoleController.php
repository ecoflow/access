<?php

namespace Ecoflow\Access\Controllers\Role;

use Ecoflow\Access\Models\Role;
use App\Http\Controllers\Controller;
use Ecoflow\Access\Repositories\RoleRepository;
use Ecoflow\Access\Requests\RoleRequest;
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
    public function show($id): Role
    {
        return $this->roleRepository->find($id);
    }

    /**
     * create
     *
     * @param array $attributes
     * @return Role
     */
    public function store(RoleRequest $request): Role
    {
        return $this->roleRepository->create($request->all());
    }

    /**
     * create
     *
     * @param RoleRequest $request
     * @param integer $id
     * @return bool
     */
    public function update(RoleRequest $request, $id): bool
    {
        return $this->roleRepository->modify($id, $request->all());
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
