<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        //
        $items = Area::all();
        return response()->json([
            'areaData' => $items
        ], 200);
    }
}
