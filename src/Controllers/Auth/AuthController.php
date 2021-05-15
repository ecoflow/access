<?php

namespace Ecoflow\Access\Controllers\Auth;

use Illuminate\Http\Request;
use Ecoflow\Access\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // try {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        
        $credentials = request(['email', 'password']);
        
        if (!User::where('email', $request->email)->first()) {
            return response()->json([
                'message' => 'Pas de compte avec cet email!'
            ], 401);
        }

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Mauvais mot de passe!'
            ], 401);
        }


        $user = User::where('email', $request->email)->first();

        if (!Hash::check($request->password, $user->password, [])) {
            return response(401)->json([
                'status_code' => 401,
                'message' => 'Mauvais mot de passe!'
            ]);
        }

        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'status_code' => 200,
            'access_token' => $tokenResult,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }

    public function logout(Request $request)
    {
        $data = $request->all();
        $user_id = $data['id'];
        $user = User::find($user_id);
        
        $user->tokens()->delete();

        return response()->json([
            'success' => true,
            'status_code' => 200,
            'message' => 'User disconnected',
        ], 200);
    }

    public function me()
    {
        return response()->json(Auth::user(), 200);
    }
}
