<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //categories
    $router->get('/categories', 'categoriesController@index');
    $router->get('/categories/{id}', 'categoriesController@show');
    $router->post('/categories', 'categoriesController@store');
    $router->put('/categories/{id}', 'categoriesController@update');
    $router->delete('/categories/{id}', 'categoriesController@destroy');
    //orderitems
    $router->get('/orderitems', 'orderitemsController@index');
    $router->get('/orderitems/{id}', 'orderitemsController@show');
    $router->post('/orderitems', 'orderitemsController@store');
    $router->put('/orderitems/{id}', 'orderitemsController@update');
    $router->delete('/orderitems/{id}', 'orderitemsController@destroy');
    //orders
    $router->get('/orders', 'ordersController@index');
    $router->get('/orders/{id}', 'ordersController@show');
    $router->post('/orders', 'ordersController@store');
    $router->put('/orders/{id}', 'ordersController@update');
    $router->delete('/orders/{id}', 'ordersController@destroy');
    //products
    $router->get('/products', 'productsController@index');
    $router->get('/products/{id}', 'productsController@show');
    $router->post('/products', 'productsController@store');
    $router->put('/products/{id}', 'productsController@update');
    $router->delete('/products/{id}', 'productsController@destroy');
    //users
    $router->get('/users', 'usersController@index');
    $router->get('/users/{id}', 'usersController@show');
    $router->post('/users', 'usersController@store');
    $router->put('/users/{id}', 'usersController@update');
    $router->delete('/users/{id}', 'usersController@destroy');

});