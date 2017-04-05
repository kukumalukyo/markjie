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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$app->get('/', function () use ($app) {
//    return $app->version();
    $url = url('foo'); //http://localhost:63343/lumen/public/index.php/foo
    return 'hello test/get:'.$url;
});

$app->group(['prefix'=>'test'], function ($app) {
    $app->get('article/create', function (Request $request) {

    });

    $app->get('service', function (Request $request){
        // from http://guzzle.readthedocs.io/en/latest/quickstart.html#making-a-request
        $client = new GuzzleHttp\Client(['base_uri' => 'http://localhost:8011/test/']);
        $response = $client->request('GET', 'service');
        echo $response->getBody();
        // rbac https://laravel-china.org/topics/3589/rbac-laravel-expand-the-package-easy-to-get-permissions-control

    });

    $app->get('now', function () {
        return date('Y-m-d H:i:s');
    });
//   $app->get('/post/{id}', ['middleware'=>'auth', function(Request $request, $id) {
//        $user = Auth::user();
//       $user = $request->user();
//   }]);
});

$app->group(['prefix'=>'api/v1'], function ($app) {
    $app->post('car', 'CarController@createCar');
    $app->put('car/{id}', 'CarController@updateCar');
    $app->delete('car/{id}', 'CarController@deleteCar');
//    $app->get('car', function (Request $request) {
//        'CarController@index'
//        $this->validate($request, [
//            'model'=>'required'
//        ]);
//    });
    $app->get('car', 'CarController@index');
});
$app->get('user/{id}', function ($id) {
   return 'user '.$id;
});

$app->get('user/{name:[A-Za-z]}', function ($name) {
    return 'user '.$name;
});

$app->post('test/post', function () use ($app) {
    return 'hello test/post';
});

$app->patch('test/patch', function () use ($app) {
    return 'hello test/patch';
});

$app->put('test/put', function () use ($app) {
    return 'hello test/put';
});

$app->delete('test/delete', function () use ($app) {
    return 'hello test/delete';
});
