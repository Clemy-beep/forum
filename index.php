<?php

namespace App;

use App\Controller\AuthorsController;
use App\Controller\AppController;
use App\Controller\ArticleController;

session_start();

require_once('vendor/autoload.php');

use Router\Router;

$router = new Router($_GET['url']);

$router->get('/delete-rate/:id', "App\Controller\RateController@delete");
$router->get('/create-article', "App\Controller\ArticleController@create");
$router->post('/create-article', "App\Controller\ArticleController@create");
$router->get('/modify-article/:id', "App\Controller\ArticleController@modify");
$router->post('/modify-article/:id', "App\Controller\ArticleController@modify");
$router->get('/rate-article/:id', "App\Controller\RateController@add");
$router->post('/rate-article/:id', "App\Controller\RateController@add");
$router->get('/delete-article/:id', "App\Controller\ArticleController@delete");
$router->get('/all-rates/:id', "App\Controller\RateController@all");
$router->get('/all-articles', "App\Controller\ArticleController@all");
$router->get('/', "App\Controller\AppController@index");

// if(!isset($_SESSION['Type'])) {
//     $_SESSION['Type'] = null;  
// }

// switch ($_SESSION['Type']) {
//     case 'client':
//         $router->get("/home", "App\Controller\AppController@index");
//         $router->get("/cats", "App\Controller\CatController@index");
//         $router->get("/logout", "App\Controller\AppController@logout"); //
//         break;

//     case 'manager':
//         $router->get("/logout", "App\Controller\AppController@logout");
//         $router->get("/home", "App\Controller\AppController@index");

//         $router->get("/cats", "App\Controller\CatController@index");
//         $router->post("/cats", "App\Controller\CatController@add");
//         $router->put("/cats/:id", "App\Controller\CatController@modify");
//         break;
//     default:
//         $router->get("/", "App\Controller\AppController@login");
//         $router->post("/", "App\Controller\AppController@login");

//         $router->get("/cats", "App\Controller\CatController@index");
//         $router->get("/lahaine", "App\Controller\AppController@addFake");
//         $router->get("/logout", "App\Controller\AppController@logout"); //
//         break;
// }

$router->run();
