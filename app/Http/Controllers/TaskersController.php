<?php

namespace App\Http\Controllers;

use App\Models\Taskers;
use Illuminate\Http\Request;

class TaskersController extends Controller
{
    public function store(Request $request)
    {
        $Taskers = Taskers::create($request ->all());
        return response()->json([
            'message'=>'store has been successfully',
            'data'=>$Taskers
        ]);
    }

    public function show(Taskers $taskers)
    {
        return response()->json([
            'message'=>'Show has been successfully',
            'data'=>$taskers
        ]);
    }

    public function update(Taskers $taskers, Request $request)
    {
        $taskers -> update(\request()->all());
        $taskers = Taskers::find($taskers -> id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=>$taskers
        ]);
    }

    public function delete(Taskers $taskers)
    {
        $taskers ->delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=>$taskers
        ]);
    }
}
