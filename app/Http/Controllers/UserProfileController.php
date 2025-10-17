<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function store(Request $request)
    {
        $UserProfile = UserProfile::create($request -> all());
        return response()->json([
           'message'=>'create has been successfully',
            'data' => $UserProfile
        ]);
    }

    public function show(UserProfile $userprofile)
    {

            return response() -> json([
               'message' => 'userprofile has been fetch successfully',
                'data' => $userprofile
            ]);
    }

    public function update(UserProfile $userprofile, Request $request)
    {
       $userprofile -> update(\request()->all());
       $userprofile = UserProfile::find($userprofile->id);
       return response()->json([
          'message'=>'update has been successfully',
           'data'=> $userprofile
       ]);
    }

    public function delete(UserProfile $userprofile)
    {
        $userprofile -> delete();
        return response()->json([
           'message'=>'delete has been successfully',
           'data'=> $userprofile
        ]);
    }
}
