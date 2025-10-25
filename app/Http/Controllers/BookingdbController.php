<?php

namespace App\Http\Controllers;

use App\Models\Bookingdb;
use Illuminate\Http\Request;

class BookingdbController extends Controller
{
    public function store(Request $request)
    {
        $Bookingdb = Bookingdb::created($request->all());
        return response()->json([
            'message'=>'Create has been successfully',
            'data'=> $Bookingdb
        ]);
    }

    public function show(Bookingdb $bookingdb)
    {
        return response()->json([
            'message'=>'Show has been successfully',
            'data'=>$bookingdb
        ]);
    }

    public function update(Bookingdb $bookingdb, Request $request)
    {
        $bookingdb ->update(\request()->all());
        $bookingdb = Bookingdb::find($bookingdb->id);
        return response()->json([
            'message'=>'Update has been successfully',
            'data'=>$bookingdb
        ]);
    }

    public function delete(Bookingdb $bookingdb)
    {
        $bookingdb->delete();
        return response()->json([
            'message'=>'Delete has been successfully',
            'data'=>$bookingdb
        ]);
    }
}
