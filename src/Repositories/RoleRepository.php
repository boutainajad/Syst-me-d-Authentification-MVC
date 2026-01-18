<?php

require_once __DIR__ . '/../Database.php';

class RoleRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

 
    public function findByName(string $name): ?array
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM roles WHERE name = ?");
            $stmt->execute([$name]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result ?: null;
        } catch (PDOException $e) {
            error_log("Database error in findByName: " . $e->getMessage());
            return null;
        }
    }

   
    public function findIdByName(string $name): ?int
    {
        try {
            $stmt = $this->db->prepare("SELECT id FROM roles WHERE name = ?");
            $stmt->execute([$name]);
            $id = $stmt->fetchColumn();
            return $id ? (int)$id : null;
        } catch (PDOException $e) {
            error_log("Database error in findIdByName: " . $e->getMessage());
            return null;
        }
    }

   
    public function findAll(): array
    {
        try {
            $stmt = $this->db->query("SELECT * FROM roles ORDER BY name");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Database error in findAll: " . $e->getMessage());
            return [];
        }
    }
}