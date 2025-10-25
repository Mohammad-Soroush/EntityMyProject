<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskquestionsStoreValidation;
use App\Http\Requests\TaskquestionsUpdateValidation;
use App\Http\Resources\TaskquestionsShowResource;
use App\Http\Resources\TaskquestionsUpdateResource;
use App\Models\Taskquestions;
use Illuminate\Http\Request;

class TaskquestionsController extends Controller
{
    public function store(TaskquestionsStoreValidation $taskquestionsstorerequest)
    {
        $Taskquestions = Taskquestions::create($taskquestionsstorerequest ->all());
        return response()->json([
           'message'=>'store has been successfully',
           'data'=>new TaskquestionsStoreValidation($Taskquestions)
        ]);
    }

    public function show(Taskquestions $taskquestions)
    {
        return response()->json([
            'message'=>'Show has been successfully',
            'data'=>new TaskquestionsShowResource($taskquestions)
        ]);
    }

    public function update(Taskquestions $taskquestions, TaskquestionsUpdateValidation $taskquestionsupdatevalidation)
    {
        $taskquestions -> update($taskquestionsupdatevalidation->all());
        $taskquestions = Taskquestions::find($taskquestions -> id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=> new TaskquestionsUpdateResource($taskquestions)
        ]);
    }

    public function delete(Taskquestions $taskquestions)
    {
        $taskquestions ->delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=>new Taskquestions($taskquestions)
        ]);
    }
}
