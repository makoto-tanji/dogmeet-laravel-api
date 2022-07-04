<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = Favorite::create($request->all());
        return response()->json([
            'favoriteData' => $item
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $requet)
    {
        //
        $item = Favorite::where('user_id', $request->userId)->where('dog_id', $request->dogId)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }
}
