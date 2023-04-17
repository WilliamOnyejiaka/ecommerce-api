<?php

declare(strict_types=1);
ini_set("display_errors", 1);

require_once __DIR__ . "/../../vendor/autoload.php";
include_once __DIR__ . "/../../config/config.php";

use Lib\Router;
use Lib\Controller;
use Lib\Validator;
use Lib\Serializer;
use \Firebase\JWT\JWT;
use Lib\TokenAttributes;
use Model\Admin;

$admin = new Router("admin", true);
$controller = new Controller();

$admin->get("/" , fn() => $controller->public_controller(function ($body, $response){
    $response->send_response(200,[
        'error' => false,
        'message' => "Hello World"
    ]);
}));

$admin->run();

