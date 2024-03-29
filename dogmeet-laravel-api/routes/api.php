<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// 以下追加
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\InformationMailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group([
    'middleware' => ['auth:api'],
    'prefix' => 'auth'
], function ($router) {
    Route::post('register', [AuthController::class, 'register'])->withoutMiddleware(['auth:api']);
    Route::post('login', [AuthController::class, 'login'])->withoutMiddleware(['auth:api']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('user', [AuthController::class, 'me']);
    Route::post('update/{userId}', [AuthController::class, 'update']);

    // 予約関連
    Route::apiResource('/reservation', ReservationController::class)->only([
        'store', 'destroy'
    ]);
    // いいね関連
    Route::post('favorite', [FavoriteController::class, 'store']);
    Route::post('favorite/destroy', [FavoriteController::class, 'destroy']);

    // 以下飼い主・管理者限定
    Route::middleware(['auth', 'can:isHigherOwner'])->group(function() {
        Route::apiResource('/dog', DogController::class)->only([
            'store', 'update', 'destroy'
        ]);
        Route::apiResource('/schedule', ScheduleController::class)->only([
            'store', 'update', 'destroy'
        ]);
        Route::apiResource('/image', ImageController::class)->only([
            'store'
        ]);
    });

    // 管理者限定
    Route::middleware(['auth', 'can:isAdmin'])->group(function() {
        Route::get('users', [AuthController::class, 'getUsers']);
        Route::post('role/{userId}', [AuthController::class, 'updateRole']);
        Route::post('mail', [InformationMailController::class, 'send']);
    });
});

Route::apiResource('/dog', DogController::class)->only([
    'index', 'show'
])->withoutMiddleware(['auth:api']);

Route::apiResource('/area', AreaController::class)->only([
    'index'
])->withoutMiddleware(['auth:api']);
Route::apiResource('/breed', BreedController::class)->only([
    'index'
])->withoutMiddleware(['auth:api']);
Route::apiResource('/color', ColorController::class)->only([
    'index'
])->withoutMiddleware(['auth:api']);
