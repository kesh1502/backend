<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRegisterRequest;

class UserController extends Controller
{
    public function index() {
        return User::all();
    }

    public function user(Request $request) {
        return $request->user();
    }

    public function register(UserRegisterRequest $request) {
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response()->json([
            'message' => 'success'
        ]);
    }
}
