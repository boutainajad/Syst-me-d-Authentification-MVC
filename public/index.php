<?php
session_start();

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';

require_once __DIR__ . '/../src/Router.php';

$router = new Router();
$router->dispatch($requestUri);
