<?php
namespace App\Models;
use Gemini as Gemini;
use Dotenv;
require __DIR__ . "/../../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../../");
$dotenv->load();
class TravelModel
{
    public static function travelPlan()
    {
        $yourApiKey = $_ENV["API_KEY_GEMINI"];
        $client = Gemini::client($yourApiKey);
        $result = $client->geminiPro()->generateContent("Hello");
        $result = $result->text();
        return $result;
    }
}
