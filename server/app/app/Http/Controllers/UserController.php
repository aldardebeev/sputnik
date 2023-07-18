<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserDestinationRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Resources\DestinationResource;
use App\Http\Resources\UserResource;
use App\Models\Destination;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
class UserController extends Controller
{
    use DisableAuthorization;
    protected $model = User::class;
    protected $request = CreateUserRequest::class;
    protected $resource = UserResource::class;
    protected $policy = UserPolicy::class;

}
