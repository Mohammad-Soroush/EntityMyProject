<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function store(Request $request)
    {

        $Categories= Categories::create($request -> all());
        return response()->json([
            'message'=>'create has been successfully',
            'data' => $Categories
        ]);
    }

    public function show(Categories $categories)

    {

        return response() -> json([
            'message' => 'sortreviews has been fetch successfully',
            'data' => $categories
        ]);
    }

    public function update(Categories $categories, Request $request)
    {
        $categories -> update(\request()->all());
        $categories = Categories::find($categories->id);
        return response()->json([
            'message'=>'update has been successfully',
            'data'=> $categories
        ]);
    }

    public function delete(Categories $categories)
    {
        $categories -> delete();
        return response()->json([
            'message'=>'delete has been successfully',
            'data'=> $categories
        ]);
    }
}
