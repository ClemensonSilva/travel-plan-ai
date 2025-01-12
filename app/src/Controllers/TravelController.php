<?php
namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Gemini as Gemini;
use App\Models\TravelModel as TravelModel;

require __DIR__ . "/../../vendor/autoload.php";

class TravelController
{
    public function home(Request $request, Response $response, $args)
    {
        $result = TravelModel::travelPlan();
        $response->getBody()->write($result);
        return $response;
    }
}
