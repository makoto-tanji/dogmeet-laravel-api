<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Dog::with([
            'user:id,name',
            'area:id,area_name',
            'breed:id,breed_name,size',
            'color_dog:id,color',
            'dog_schedule'
        ])->get();
        return response()->json([
            'dogData' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = Dog::create($request->all());
        return response()->json([
            'dogStoreData' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $dog)
    {
        //
        $item = Dog::with([
            'user:id,name',
            'area:id,area_name',
            'breed:id,breed_name,size',
            'color_dog:id,color',
            'dog_schedule'
        ])->where('id', $dog->id)->get();
        if($item) {
            return response()->json([
                'dogResData' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dog $dog)
    {
        //
        $update = [
            'dog_name' => $request->dog_name,
            'overview' => $request->overview,
            'birthday' => $request->birthday,
            'sex' => $request->sex,
            'thumbnail_path' => $request->thumbnail_path,
            'area_id' => $request->area_id,
            'breed_id' => $request->breed_id,
        ];
        $item = Dog::where('id', $dog->id)->update($update);
        if ($item) {
            return response()->json([
                'message' => 'Updated successfully'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dog $dog)
    {
        //
        $item = Dog::where('id', $dog->id)->delete();
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
