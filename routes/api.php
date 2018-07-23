<?php

use App\Http\Middleware\APIResponseContentType;
use App\Http\Middleware\APIVersion;
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Dingo API Routes
|--------------------------------------------------------------------------
|
| Defines all dingo api routes
|
*/
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group([
        'middleware' => ['bindings'],
        'prefix' => 'v1',
        'namespace' => 'App\\Http\\Controllers\\APIv1'
    ],
        function ($api) {
            $api->resource('categories', 'CategoryController');
        });
});
