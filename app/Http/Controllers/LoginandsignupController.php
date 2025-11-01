<?php

namespace App\Http\Controllers;

use App\Models\Loginandsignup;
use Illuminate\Http\Request;

class LoginandsignupController extends Controller
{

    public function store(Request $request)
    {

        $Loginandsignup= Loginandsignup::create($request -> all());
        return response()->json([
            'message'=>'create has been successfully',
            'data' => $Loginandsignup
        ]);
    }

    public function show(Loginandsignup $loginandsignup)

    {

        return response() -> json([
            'message' => 'sortreviews has been fetch successfully',
            'data' => $loginandsignup
        ]);
    }

    public function update(Loginandsignup $loginandsignup, Request $request)
    {
        $loginandsignup -> update(\request()->all());
        $loginandsignup = Loginandsignup::find($loginandsignup->id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=> $loginandsignup
        ]);
    }

    public function delete(Loginandsignup $loginandsignup)
    {
        $loginandsignup -> delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=> $loginandsignup
        ]);
    }
}
