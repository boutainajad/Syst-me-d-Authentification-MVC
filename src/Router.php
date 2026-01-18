<?php

require_once __DIR__ . '/Controllers/AuthController.php';
require_once __DIR__ . '/Controllers/CandidateController.php';
require_once __DIR__ . '/Controllers/RecruiterController.php';
require_once __DIR__ . '/Controllers/AdminController.php';

class Router {

    public function dispatch($uri) {
        $uri = trim(parse_url($uri ?? '/', PHP_URL_PATH), '/');

        $authController = new AuthController();

        switch ($uri) {
            case '':
            case 'login':
                $authController->login();
                break;

            case 'register':
                $authController->register();
                break;

            case 'logout':
                $authController->logout();
                break;

            case 'candidate/dashboard':
                $controller = new CandidateController();
                $controller->dashboard();
                break;

            case 'recruiter/dashboard':
                $controller = new RecruiterController();
                $controller->dashboard();
                break;

            case 'admin/dashboard':
                $controller = new AdminController();
                $controller->dashboard();
                break;

            default:
                http_response_code(404);
                echo "404 Page Not Found";
                break;
        }
    }
}