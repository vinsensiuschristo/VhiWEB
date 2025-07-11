<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    public function login(LoginPostRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        if (!auth()->attempt($validatedData)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
            ], 401);
        }

        $user = auth()->user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login success',
            'data' => [
                'email' => $user['email'],
                'token' => $token,
            ]
        ], 200);
    }
}
