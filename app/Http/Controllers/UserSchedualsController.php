<?php

namespace App\Http\Controllers;

use App\Models\UserScheduals;
use Illuminate\Http\Request;

class UserSchedualsController extends Controller
{
    public function store(Request $request)
    {
        $UserScheduals = UserScheduals::create($request -> all());
        return response() -> json([
            'message'=>'create has been successfully',
            'data'=> $UserScheduals
        ]);
    }

    public function show(UserScheduals $userscheduals)
    {
        return response()->json([
            'message'=>'Show has been successfully',
            'data'=> $userscheduals
        ]);
    }

    public function update(UserScheduals $userscheduals, Request $request)
    {
        $userscheduals -> update(\request()->all());
        $userscheduals = UserScheduals::find($userscheduals -> id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=>$userscheduals
        ]);
    }

    public function delete(UserScheduals $userscheduals)
    {
        $userscheduals ->delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=>$userscheduals
        ]);
    }
}
