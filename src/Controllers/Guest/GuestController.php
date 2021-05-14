<?php

namespace Ecoflow\Access\Controllers\Guest;

use Ecoflow\Access\Models\Guest;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        // code
    }

    /**
     * Return all records
     *
     */
    public function index()
    {
        return Guest::all();
    }

    /**
     * Show a record
     *
     */
    public function show($id): Guest
    {
        return Guest::find($id);
    }

    /**
     * create
     *
     * @param array $attributes
     * @return Guest
     */
    public function create(array $attributes): Guest
    {
        return Guest::create($attributes);
    }

    /**
     * delete
     *
     * @param string $id
     * @return bool
     */
    public function delete(string $id): bool
    {
        return Guest::destroy($id);
    }
}
