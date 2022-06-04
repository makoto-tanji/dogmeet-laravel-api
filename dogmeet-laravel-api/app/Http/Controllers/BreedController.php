<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
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
        $item = Breed::create($request->all());
        return response()->json([
            'areaSoredata' => $item
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Breed $breed)
    {
        //
        $update = [
            'breed_name' => $request->breed_name
        ];
        $item = Breed::where('id', $breed->id)->update($update);
        if ($item) {
            return response()->json([
                'message' => 'Updated successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breed $breed)
    {
        //
        $item = Breed::where('id', $breed->id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
