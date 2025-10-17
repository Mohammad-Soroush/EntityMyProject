<?php

namespace App\Http\Controllers;

use App\Models\Taskquestions;
use Illuminate\Http\Request;

class TaskquestionsController extends Controller
{
    public function store(Request $request)
    {
        $Taskquestions = Taskquestions::create($request ->all());
        return response()->json([
           'message'=>'store has been successfully',
           'data'=>$Taskquestions
        ]);
    }

    public function show(Taskquestions $taskquestions)
    {
        return response()->json([
            'message'=>'Show has been successfully',
            'data'=>$taskquestions
        ]);
    }

    public function update(Taskquestions $taskquestions, Request $request)
    {
        $taskquestions -> update(\request()->all());
        $taskquestions = Taskquestions::find($taskquestions -> id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=>$taskquestions
        ]);
    }

    public function delete(Taskquestions $taskquestions)
    {
        $taskquestions ->delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=>$taskquestions
        ]);
    }
}
