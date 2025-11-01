<?php

namespace App\Http\Controllers;

use App\Models\Promot;
use Illuminate\Http\Request;

class PromotController extends Controller
{
    public function store(Request $request)
    {
        $Promot= Promot::create($request -> all());
        return response()->json([
            'message'=>'create has been successfully',
            'data' => $Promot
        ]);
    }

    public function show(Promot $promot)

    {

        return response() -> json([
            'message' => 'sortreviews has been fetch successfully',
            'data' => $promot
        ]);
    }

    public function update(Promot $promot, Request $request)
    {
        $promot -> update(\request()->all());
        $promot = Promot::find($promot->id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=> $promot
        ]);
    }

    public function delete(Promot $promot)
    {
        $promot -> delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=> $promot
        ]);
    }

}
