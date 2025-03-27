<?php
require_once "database.php";

class User
{
    private $conn;
    private $table = "users";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getUserByUsername($username)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($fullname, $email, $username, $password, $role = "user")
    {
        $query = "INSERT INTO " . $this->table . " (fullname, email, username, password, role) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$fullname, $email, $username, $password, $role]);
    }
}

?>