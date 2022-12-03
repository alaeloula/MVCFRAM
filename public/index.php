<?php
require_once __DIR__ . '/../vendor/autoload.php';
use app\controllers\siteController;
use app\controllers\AuthController;
use \app\core\Application;

$app = new Application(dirname(__DIR__));
$app->router->get('/', [siteController::class,'home']);
// $app->router->get('/home', 'home');

$app->router->get('/contact', 'contact');
$app->router->post('/contact', [siteController::class,'handelContact']);

$app->router->get('/login', [AuthController::class,'login']);
$app->router->post('/login', [AuthController::class,'login']);
$app->router->get('/register', [AuthController::class,'register']);
$app->router->post('/register', [AuthController::class,'register']);
$app->run();
