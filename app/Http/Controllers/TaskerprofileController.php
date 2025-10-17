<?php

namespace App\Http\Controllers;

use App\Models\Taskerprofile;
use Illuminate\Http\Request;

class TaskerprofileController extends Controller
{
    public function store(Request $request)
    {
        $TaskerProfile = Taskerprofile::create($request -> all());
        return response()->json([
            'message'=>'create has been successfully',
            'data' => $TaskerProfile
        ]);
    }

    public function show(Taskerprofile $taskerprofile)
    {

        return response() -> json([
            'message' => 'userprofile has been fetch successfully',
            'data' => $taskerprofile
        ]);
    }

    public function update(Taskerprofile $taskerprofile, Request $request)
    {
        $taskerprofile -> update(\request()->all());
        $taskerprofile = Taskerprofile::find($taskerprofile->id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=> $taskerprofile
        ]);
    }

    public function delete(Taskerprofile $taskerprofile)
    {
        $taskerprofile -> delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=> $taskerprofile
        ]);
    }
}
