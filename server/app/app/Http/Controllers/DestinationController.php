<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserDestinationRequest;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DestinationController extends Controller
{
    public function getDestinations()
    {
        $data = Destination::with('photos')->get();
        return response()->json(['destination' => $data]);
    }

    public function addDestination(AddUserDestinationRequest $request)
    {
        $user = Auth::user();
        $data = $request->validated();

        $destination = Destination::find($data['destination_id']);
        $user->destinations()->attach($destination);

        return response()->json(['success' => true]);
    }

    public function getUserDestinations()
    {
        $user = Auth::user();
        $destinations = $user->destinations()->with('photos')->get();
        return response()->json(['data' => $destinations]);
    }

}
