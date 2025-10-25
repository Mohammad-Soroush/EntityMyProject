<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSchedualsStoreValidation;
use App\Http\Requests\UserSchedualUpdateValidation;
use App\Http\Resources\UserSchedualDeleteResource;
use App\Http\Resources\UserSchedualShowResource;
use App\Http\Resources\UserSchedualStoreResource;
use App\Http\Resources\USerSchedualUpdateResource;
use App\Models\UserScheduals;
use Illuminate\Http\Request;

class UserSchedualsController extends Controller
{
    public function store(UserSchedualsStoreValidation $userschedualsstorevalidation)
    {
        $UserScheduals = UserScheduals::create($userschedualsstorevalidation -> all());
        return response() -> json([
            'message'=>'create has been successfully',
            'data'=> new UserSchedualStoreResource($UserScheduals)
        ]);
    }

    public function show(UserScheduals $userscheduals)
    {
        return response()->json([
            'message'=>'Show has been successfully',
            'data'=> new UserSchedualShowResource($userscheduals)
        ]);
    }

    public function update(UserScheduals $userscheduals, UserSchedualUpdateValidation $userschedualupdatevalidation)
    {
        $userscheduals -> update($userschedualupdatevalidation->all());
        $userscheduals = UserScheduals::find($userscheduals -> id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=>new USerSchedualUpdateResource($userscheduals)
        ]);
    }

    public function delete(UserScheduals $userscheduals)
    {
        $userscheduals ->delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=>new UserSchedualDeleteResource($userscheduals)
        ]);
    }
}
