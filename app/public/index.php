<?php
use App\Controllers\TravelController as TravelController;
use Slim\Factory\AppFactory;
require __DIR__ . "/../vendor/autoload.php";

$app = AppFactory::create();

$app->get("/", [TravelController::class, "home"]);

try {
    $app->run();
} catch (Exception $e) {
    echo $e->getMessage();
}
