<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskerProfilesStoreValidation;
use App\Http\Requests\TaskerProfileUpdateValidation;
use App\Http\Resources\TaskerProfileDeleteResource;
use App\Http\Resources\TaskerProfileShowResource;
use App\Models\Taskerprofile;
use Illuminate\Http\Request;

class TaskerprofileController extends Controller
{
    public function store(TaskerProfilesStoreValidation $taskerprofilesstorevalidation)
    {
        $TaskerProfile = Taskerprofile::create($taskerprofilesstorevalidation -> all());
        return response()->json([
            'message'=>'create has been successfully',
            'data' => new TaskerProfilesStoreValidation($TaskerProfile)
        ]);
    }

    public function show(Taskerprofile $taskerprofile)
    {
        return response() -> json([
            'message' => 'userprofile has been fetch successfully',
            'data' => new TaskerProfileShowResource($taskerprofile)
        ]);
    }

    public function update(Taskerprofile $taskerprofile, TaskerProfileUpdateValidation $taskerprofileupdatevalidation)
    {
        $taskerprofile -> update($taskerprofileupdatevalidation->all());
        $taskerprofile = Taskerprofile::find($taskerprofile->id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=> new TaskerProfileUpdateValidation($taskerprofile)
        ]);
    }

    public function delete(Taskerprofile $taskerprofile)
    {
        $taskerprofile -> delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=> new TaskerProfileDeleteResource($taskerprofile)
        ]);
    }
}
