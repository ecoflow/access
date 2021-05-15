<?php

namespace Ecoflow\Access\Controllers\User;

use Ecoflow\Access\Models\User;
use App\Http\Controllers\Controller;
use Ecoflow\Access\Requests\UserRequest;
use Ecoflow\Access\Repositories\UserRepository;
use Ecoflow\Access\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * User repository
     *
     * @var UserRepository
     */
    protected UserRepository $repository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
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
    public function store(UserRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ];

        return response()->json([
            'success' => true,
            'data' => $this->repository->create($data),
        ]);
    }

    /**
     * create
     *
     * @param UserRequest $request
     * @param integer $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UserUpdateRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $data = $request->all();
        // validation manually
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        return response()->json([
            'success' => true,
            'data' => $this->repository->modify($id, $data),
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
        $deleted = $this->repository->delete($id);
        return response()->json([
            'success' => $deleted ? true : false,
            'data' => $deleted ? true : false,
        ]);
    }
}
