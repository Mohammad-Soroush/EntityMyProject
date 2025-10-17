<?php

namespace App\Http\Controllers;

use App\Models\PastTasks;
use Illuminate\Http\Request;

class PastTasksController extends Controller
{
    public function store(Request $request)
    {

            $pastTasks= PastTasks::create($request -> all());
        return response()->json([
            'message'=>'create has been successfully',
            'data' => $pastTasks
        ]);
    }

    public function show(PastTasks $pasttasks)

    {

        return response() -> json([
            'message' => 'sortreviews has been fetch successfully',
            'data' => $pasttasks
        ]);
    }

    public function update(PastTasks $pasttasks, Request $request)
    {
        $pasttasks -> update(\request()->all());
        $pasttasks = PastTasks::find($pasttasks->id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=> $pasttasks
        ]);
    }

    public function delete(PastTasks $pasttasks)
    {
        $pasttasks -> delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=> $pasttasks
        ]);
    }
}
