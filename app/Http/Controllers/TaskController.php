<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
            $Task = Task::create($request -> all());
            return response()->json([
                'message'=>'create has been successfully',
                'data'=> $Task
            ]);
    }

    public function show(Task $task)
    {
        return response()->json([
            'message'=>'show has been successfully',
            'data'=>$task
        ]);
    }

    public function update(Task $task, Request $request)
    {
        $task -> update(\request()->all());
        $task = Task::find($task -> id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=>$task
        ]);
    }

    public function delete(Task $task)
    {
        $task -> delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=>$task
        ]);
    }
};
