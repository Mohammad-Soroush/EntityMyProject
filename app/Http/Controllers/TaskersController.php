<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskerStoreValidation;
use App\Http\Requests\TaskerUpdateValidation;
use App\Http\Resources\TaskerDeleteResource;
use App\Http\Resources\TaskerShowResource;
use App\Http\Resources\TaskerStoreResource;
use App\Http\Resources\TaskerUpdateResource;
use App\Models\Taskers;
use Illuminate\Http\Request;

class TaskersController extends Controller
{
    public function store(TaskerStoreValidation $taskerstorevalidation)
    {
        $Taskers = Taskers::create($taskerstorevalidation ->all());
        return response()->json([
            'message'=>'store has been successfully',
            'data'=> new TaskerStoreResource($Taskers)
        ]);
    }

    public function show(Taskers $taskers)
    {
        return response()->json([
            'message'=>'Show has been successfully',
            'data'=>new TaskerShowResource($taskers)
        ]);
    }

    public function update(Taskers $taskers, TaskerUpdateValidation $taskerupdatevalidation)
    {
        $taskers -> update($taskerupdatevalidation->all());
        $taskers = Taskers::find($taskers -> id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=>new TaskerUpdateResource($taskers)
        ]);
    }

    public function delete(Taskers $taskers)
    {
        $taskers ->delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=>new TaskerDeleteResource($taskers)
        ]);
    }
}
