<?php

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

$app->get('/', function () use ($app) {
    return $app->version();
});


$app->get('foo', function () {
    return 'Hello World';
});

$app->post('foo', function () {
    //
    return "post";
});

/*
$app->get('user/{id}', function ($id) {
    return 'User '.$id;
});
*/

/*
$app->get('profile', [
    'as' => 'profile', 'uses' => 'UserController@showProfile'
]);
*/
/*
$app->get('profile', ['as' => 'profile', function () {
    //
}]);
*/



$app->get('user/{name:[A-Za-z]+}', function ($name) {
    return "this should be a string: " . gettype($name) . ", the value is: ".$name ;
});


$app->get('user/{name:[1-9]+}', function ($name) {
    return "this should be a number: " . gettype(intval($name)). ", the value is: ".$name ;
});


$app->get('profile', [
    'as' => 'profile', 'uses' => 'UserController@showProfile'
]);


/*
$app->get('user[/{name}]', function ($name = null) {
    return $name;
});
*/


/*
// Generating URLs...
$url = route('profile');

// Generating Redirects...
return redirect()->route('profile');

*/


$app->get('user/{id}/profile', ['as' => 'profile', function ($id) {
    return "profile, userid:".$id;
}]);

$url = route('profile', ['id' => 1]);



$app->group(['middleware' => 'auth'], function () use ($app) {
    $app->get('/', function ()    {
        // Uses Auth Middleware
    });

    $app->get('user/profile', function () {
        // Uses Auth Middleware
    });
});