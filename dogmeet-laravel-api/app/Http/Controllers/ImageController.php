<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 以下追加
use Illuminate\Support\Facades\Hash;

class ImageController extends Controller
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
        // 名前をランダムに設定。拡張子は.jpg
        $name = substr(bin2hex(random_bytes(5)), 0, 10) . '.jpg';
        $request->imgFile->storeAs('public/images', $name);
        return response()->json([
            'imgName' => $name,
        ]);
    }
}
