<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../Models/User.php';

class UserRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function findByEmail(string $email): ?array
    {
        try {
            $stmt = $this->db->prepare("
                SELECT users.*, roles.name AS role
                FROM users
                JOIN roles ON roles.id = users.role_id
                WHERE users.email = ?
            ");
            $stmt->execute([$email]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result ?: null;
        } catch (PDOException $e) {
            error_log("Database error in findByEmail: " . $e->getMessage());
            throw new Exception("Erreur lors de la recherche de l'utilisateur");
        }
    }

    public function create(User $user): bool
    {
        try {
            $stmt = $this->db->prepare("
                INSERT INTO users (name, email, password, role_id)
                VALUES (?, ?, ?, ?)
            ");
            
            $result = $stmt->execute([
                $user->name,
                $user->email,
                $user->password,
                $user->role_id
            ]);
            
            return $result;
        } catch (PDOException $e) {
            error_log("Database error in create: " . $e->getMessage());
            
            if ($e->getCode() == 23000) {
                throw new Exception("Cet email est déjà utilisé");
            }
            
            throw new Exception("Erreur lors de la création de l'utilisateur: " . $e->getMessage());
        }
    }

    public function emailExists(string $email): bool
    {
        try {
            $stmt = $this->db->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
            $stmt->execute([$email]);
            return $stmt->fetchColumn() > 0;
        } catch (PDOException $e) {
            error_log("Database error in emailExists: " . $e->getMessage());
            return false;
        }
    }
}