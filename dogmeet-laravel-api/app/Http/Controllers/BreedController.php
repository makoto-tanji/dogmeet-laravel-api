<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    public function index()
    {
        //
        $items = Breed::all();
        return response()->json([
            'breedData' => $items
        ], 200);
    }
}
