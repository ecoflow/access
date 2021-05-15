<?php

namespace Ecoflow\Access\Controllers\User;

use Ecoflow\Access\Models\User;
use App\Http\Controllers\Controller;
use Ecoflow\Access\Requests\UserRequest;
use Illuminate\Database\Eloquent\Collection;
use Ecoflow\Access\Repositories\UserRepository;
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
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->repository->all();
    }

    /**
     * Show a record
     *
     * @return User
     */
    public function show($id): User
    {
        return $this->repository->find($id);
    }

    /**
     * create
     *
     * @param array $attributes
     * @return User
     */
    public function store(UserRequest $request): User
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ];

        return $this->repository->create($data);
    }

    /**
     * create
     *
     * @param UserRequest $request
     * @param integer $id
     * @return bool
     */
    public function update(UserRequest $request, $id): bool
    {
        return $this->repository->modify($id, $request->all());
    }

    /**
     * delete
     *
     * @param string $id
     * @return bool
     */
    public function destroy(string $id): bool
    {
        return $this->repository->delete($id);
    }
}
