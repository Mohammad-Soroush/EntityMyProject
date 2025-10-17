<?php

namespace App\Http\Controllers;

use App\Models\SortReviews;
use Illuminate\Http\Request;

class SortReviewsController extends Controller
{
    public function store(Request $request)
    {
        $SortReview = SortReviews::create($request -> all());
        return response()->json([
            'message'=>'create has been successfully',
            'data' => $SortReview
        ]);
    }

    public function show(SortReviews $sortreviews)
    {

        return response() -> json([
            'message' => 'sortreviews has been fetch successfully',
            'data' => $sortreviews
        ]);
    }

    public function update(SortReviews $sortreviews, Request $request)
    {
        $sortreviews -> update(\request()->all());
        $sortreviews = SortReviews::find($sortreviews->id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=> $sortreviews
        ]);
    }

    public function delete(SortReviews $sortreviews)
    {
        $sortreviews -> delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=> $sortreviews
        ]);
    }
}
