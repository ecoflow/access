<?php

namespace Ecoflow\Access\Controllers\Role;

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
    protected RoleRepository $repository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->repository = new RoleRepository();
    }

    /**
     * Return all records
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->all(),
        ]);
    }

    /**
     * Show a record
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->find($id),
        ]);
    }

    /**
     * create
     *
     * @param array $attributes
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(RoleRequest $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->create($request->all()),
        ]);
    }

    /**
     * create
     *
     * @param RoleRequest $request
     * @param integer $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(RoleRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->modify($id, $request->all()),
        ]);
    }

    /**
     * delete
     *
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->delete($id),
        ]);
    }
}
