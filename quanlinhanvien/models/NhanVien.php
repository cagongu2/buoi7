<?php
require_once "database.php";

class NhanVien {
    private $conn;
    private $table = "nhanvien";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll($limit, $offset) {
        $query = "SELECT * FROM " . $this->table . " LIMIT :limit OFFSET :offset";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
        $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotal() {
        $query = "SELECT COUNT(*) as total FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }


    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE Ma_NV = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $query = "INSERT INTO " . $this->table . " (Ma_NV, Ten_NV, Phai, Noi_Sinh, Ma_Phong, Luong) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$data['Ma_NV'], $data['Ten_NV'], $data['Phai'], $data['Noi_Sinh'], $data['Ma_Phong'], $data['Luong']]);
    }

    public function update($id, $data) {
        $query = "UPDATE " . $this->table . " SET Ten_NV = ?, Phai = ?, Noi_Sinh = ?, Ma_Phong = ?, Luong = ? WHERE Ma_NV = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$data['Ten_NV'], $data['Phai'], $data['Noi_Sinh'], $data['Ma_Phong'], $data['Luong'], $id]);
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE Ma_NV = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
    
}
?>
