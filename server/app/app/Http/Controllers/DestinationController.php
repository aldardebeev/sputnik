<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserDestinationRequest;
use App\Http\Resources\DestinationResource;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;

class DestinationController extends Controller
{

    protected $model = Destination::class;
    protected $resource = DestinationResource::class;

}
