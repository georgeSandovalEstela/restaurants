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

$router->get('/restaurants/list','RestaurantsController@allRestaurants');
$router->post('/restaurants/register','RestaurantsController@create');
$router->put('/restaurants','RestaurantsController@update');
// $router->get('/restaurants/{id}','RestaurantsController@find');

$router->post('/restaurants/RRHH/personals/register','PersonalsController@create');
$router->post('/restaurants/RRHH/persons/register','PersonsController@create');