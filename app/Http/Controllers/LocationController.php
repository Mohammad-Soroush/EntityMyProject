<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Location $location)
    {
        $location = Location::all();
        return response()->json([
            'message'=>'location has been successfully',
            'data'=>$location
        ]);
    }
    public function store(Request $request)
    {
        $Location = Location::create($request->all());
        return response()->json([
            'message'=>'store has been successfully',
            'data'=> $Location
        ]);
    }

    public function show(Location $location)
    {
        return response()->json([
            'message'=>'Show has been successfully',
            'data'=> $location
        ]);
    }

    public function update(Location $location, Request $request)
    {
        $location-> update(\request()->all());
        $location = Location::find($location->id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=>$location
        ]);
    }

    public function delete(Location $location)
    {
        $location ->delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=>$location
        ]);
    }
}
