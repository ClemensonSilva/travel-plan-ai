<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Gemini as Gemini;
require __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->load();

$app = AppFactory::create();

$app->get("/", function (Request $request, Response $response, $args) {
    $response->getBody()->write("Estou funcionando");
    return $response;
});

try {
    $app->run();
} catch (Exception $e) {
    echo $e->getMessage();
}
