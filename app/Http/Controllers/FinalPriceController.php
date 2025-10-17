<?php

namespace App\Http\Controllers;

use App\Models\FinalPrice;
use Illuminate\Http\Request;

class FinalPriceController extends Controller
{

    public function store(Request $request)
    {

        $FinalPrice= FinalPrice::create($request -> all());
        return response()->json([
            'message'=>'create has been successfully',
            'data' => $FinalPrice
        ]);
    }

    public function show(FinalPrice $finalprice)

    {

        return response() -> json([
            'message' => 'sortreviews has been fetch successfully',
            'data' => $finalprice
        ]);
    }

    public function update(FinalPrice $finalprice, Request $request)
    {
        $finalprice -> update(\request()->all());
        $finalprice = FinalPrice::find($finalprice->id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=> $finalprice
        ]);
    }

    public function delete(FinalPrice $finalprice)
    {
        $finalprice -> delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=> $finalprice
        ]);
    }

}
