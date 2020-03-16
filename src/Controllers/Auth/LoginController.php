<?php

namespace Ecoflow\Access\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->guard('ecoflow');
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        return '/home';
    }
}
