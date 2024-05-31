<?php
require_once "./controllers/HomeController.php";
use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];
try {
    $router = new RouteCollector();


    // khu vực cần quan tâm -----------
    // bắt đầu định nghĩa ra các đường dẫn
    // $router->get('/', function () {
    //     return "trang chủ";
    // });



    // khu vực cần quan tâm -----------
    $router->get('/', [HomeController::class, 'index']);

    $router->any('/login', [App\Controllers\AuthController::class, 'login']);

    $router->get('/menu', [App\Controllers\HomeController::class, 'menu']);

    $router->get('/logout', [App\Controllers\AuthController::class, 'logout']);

    $router->get('/profile/{username}', [App\Controllers\UserController::class, 'getUserProfile']);

    # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

    // Print out the value returned from the dispatched function
    echo $response;
} catch (Exception $e) {
    return (new HomeController)->error404();
}
