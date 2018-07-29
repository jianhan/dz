<?php

use App\Http\Middleware\APIResponseContentType;
use App\Http\Middleware\APIVersion;
use Illuminate\Database\QueryException;
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
            // Category related routes
            $api->resource('categories', 'CategoryController');
            $api->delete('categories/{category}/ideas/detach',
                'CategoryIdeaController@detach')->name('categories.ideas.detach');
            $api->delete('categories/{category}/ideas/detach-all',
                'CategoryIdeaController@detachAll')->name('categories.ideas.detach-all');
            $api->post('categories/{category}/ideas/sync',
                'CategoryIdeaController@sync')->name('categories.ideas.sync');
            $api->resource('categories.ideas', 'CategoryIdeaController', ['except' => ['destroy']]);

            // Idea related routes
            $api->resource('ideas', 'IdeaController');

        });
});

/*
|--------------------------------------------------------------------------
| Dingo API Exception customization
|--------------------------------------------------------------------------
|
| Defines all dingo api exception handling
|
*/
app('Dingo\Api\Exception\Handler')->register(function (
    QueryException $exception
) {

    throw new Symfony\Component\HttpKernel\Exception\HttpException(500, "Unable to fulfill request");
});
