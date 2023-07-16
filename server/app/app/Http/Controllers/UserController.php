<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create(CreateUserRequest $request)
    {
        $data = $request->all();
        return response()->json(['data' => User::create($data)]);
    }

}
