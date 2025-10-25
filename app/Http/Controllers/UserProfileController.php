<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserProfileStoreValidation;
use App\Http\Requests\UserProfileUpdateValidation;
use App\Http\Resources\UserProfileDeleteResource;
use App\Http\Resources\UserProfileShowResource;
use App\Http\Resources\UserProfileStoreResource;
use App\Http\Resources\UserProfileUpdateResourser;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function store(UserProfileStoreValidation $userprofilestorevalidation)
    {
        $UserProfile = UserProfile::create($userprofilestorevalidation -> all());
        return response()->json([
           'message'=>'create has been successfully',
            'data' => new UserProfileStoreResource($UserProfile)
        ]);
    }

    public function show(UserProfile $userprofile)
    {

            return response() -> json([
               'message' => 'userprofile has been fetch successfully',
                'data' => new UserProfileShowResource($userprofile)
            ]);
    }

    public function update(UserProfile $userprofile, UserProfileUpdateValidation $userprofileupdatevalidation)
    {
       $userprofile -> update($userprofileupdatevalidation->all());
       $userprofile = UserProfile::find($userprofile->id);
       return response()->json([
          'message'=>'update has been successfully',
           'data'=> new UserProfileUpdateResourser($userprofile)
       ]);
    }

    public function delete(UserProfile $userprofile)
    {
        $userprofile -> delete();
        return response()->json([
           'message'=>'delete has been successfully',
           'data'=> new UserProfileDeleteResource($userprofile)
        ]);
    }
}
