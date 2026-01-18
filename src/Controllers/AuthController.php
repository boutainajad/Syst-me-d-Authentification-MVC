<?php

require_once __DIR__ . '/../Services/AuthService.php';
require_once __DIR__ . '/../Repositories/RoleRepository.php';
require_once __DIR__ . '/../Models/User.php';

class AuthController
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($this->authService->login($email, $password)) {
                $role = $_SESSION['user']['role'];
                
                switch ($role) {
                    case 'admin':
                        header('Location: /admin/dashboard');
                        break;
                    case 'recruiter':
                        header('Location: /recruiter/dashboard');
                        break;
                    case 'candidate':
                        header('Location: /candidate/dashboard');
                        break;
                    default:
                        header('Location: /login');
                }
                exit;
            } else {
                $error = 'Email ou mot de passe incorrect';
            }
        }

        require_once __DIR__ . '/../Views/auth/login.php';
    }

    public function register(): void
    {
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $name = trim($_POST['name'] ?? '');
                $email = trim($_POST['email'] ?? '');
                $password = $_POST['password'] ?? '';
                $role = $_POST['role'] ?? '';

                if (empty($name) || empty($email) || empty($password) || empty($role)) {
                    $error = 'Tous les champs sont obligatoires';
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error = 'Email invalide';
                } elseif (strlen($password) < 6) {
                    $error = 'Le mot de passe doit contenir au moins 6 caractères';
                } elseif (!in_array($role, ['admin', 'recruiter', 'candidate'])) {
                    $error = 'Rôle invalide';
                } else {
                    $result = $this->authService->register($name, $email, $password, $role);
                    
                    if ($result === true) {
                        header('Location: /login?registered=1');
                        exit;
                    } else {
                        $error = $result;
                    }
                }
            } catch (Exception $e) {
                error_log("Registration error: " . $e->getMessage());
                $error = "Une erreur s'est produite lors de l'inscription. Détails: " . $e->getMessage();
            }
        }

        require_once __DIR__ . '/../Views/auth/register.php';
    }

    public function logout(): void
    {
        session_destroy();
        header('Location: /login');
        exit;
    }
}