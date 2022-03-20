<?php

use App\Controllers\ProductsAddController;
use App\Controllers\ProductsListController;
use App\Redirect;
use App\View;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';


$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    // Products List
    $r->addRoute('GET', '/', [ProductsListController::class, 'list']);

    // Add
    $r->addRoute('GET', '/products/add', [ProductsAddController::class, 'add']);
    $r->addRoute('POST', '/', [ProductsAddController::class, 'store']);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        var_dump('404 Not Found');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        var_dump('405 Method Not Allowed');
        break;
    case FastRoute\Dispatcher::FOUND:
        $controller = $routeInfo[1][0];
        $method = $routeInfo[1][1];

        $vars = $routeInfo[2];

        /** @var View $response */

        $response = (new $controller)->$method($vars);

        $loader = new FilesystemLoader('app/Views');
        $twig = new Environment($loader);

        if($response instanceof View) {
            echo $twig->render($response->getPath() . '.html', $response->getVariables());
        }

        if($response instanceof Redirect) {
            header('Location: ' . $response->getLocation());
        }

        break;
}