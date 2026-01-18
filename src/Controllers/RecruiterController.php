<?php

class RecruiterController
{
    public function dashboard(): void
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        if ($_SESSION['user']['role'] !== 'recruiter') {
            http_response_code(403);
            require_once __DIR__ . '/../Views/errors/403.php';
            exit;
        }

        require_once __DIR__ . '/../Views/recruiter/dashboard.php';
    }
}