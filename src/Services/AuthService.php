<?php

require_once __DIR__ . '/../Repositories/UserRepository.php';
require_once __DIR__ . '/../Repositories/RoleRepository.php';
require_once __DIR__ . '/../Models/User.php';

class AuthService
{
    private UserRepository $userRepository;
    private RoleRepository $roleRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->roleRepository = new RoleRepository();
    }

    public function login(string $email, string $password): bool
    {
        try {
            $userData = $this->userRepository->findByEmail($email);
            
            if (!$userData) {
                return false;
            }

            if (!password_verify($password, $userData['password'])) {
                return false;
            }

            $_SESSION['user'] = [
                'id' => $userData['id'],
                'name' => $userData['name'],
                'email' => $userData['email'],
                'role' => $userData['role']
            ];

            return true;
        } catch (Exception $e) {
            error_log("Login error: " . $e->getMessage());
            return false;
        }
    }

    public function register(string $name, string $email, string $password, string $roleName): bool|string
    {
        try {
            if ($this->userRepository->emailExists($email)) {
                return "Cet email est déjà utilisé";
            }

            $role = $this->roleRepository->findByName($roleName);
            
            if (!$role) {
                return "Rôle invalide";
            }

            $user = new User(
                id: null,
                name: $name,
                email: $email,
                password: password_hash($password, PASSWORD_DEFAULT),
                role_id: $role['id']
            );

            $this->userRepository->create($user);

            return true;
        } catch (Exception $e) {
            error_log("Registration error: " . $e->getMessage());
            return $e->getMessage();
        }
    }

    public function logout(): void
    {
        session_destroy();
    }
}