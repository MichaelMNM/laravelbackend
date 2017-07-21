<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;

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


Route::options('{all}', function () {
    return response('ok', 200)
        ->header('Access-Control-Allow-Credentials', 'true')
        ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With')
        ->header('Access-Control-Allow-Origin', '*');
})->where('all', '.*');


Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});


Route::middleware('auth:api')->get('test', function(Request $request) {

    return Response::json(['test' => 'success']);
});


Route::get('api-test', function (Request $request) {

    return Response::json(['apiTest' => 'Success Augmented Again'], 200);
});