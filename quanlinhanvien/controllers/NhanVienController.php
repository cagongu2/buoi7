<?php
require_once "quanlinhanvien/models/NhanVien.php";

class NhanVienController
{
    private $nhanVienModel;

    public function __construct()
    {
        $this->nhanVienModel = new NhanVien();
    }

    // public function index() {
    //     $nhanviens = $this->nhanVienModel->getAll();
    //     include "quanlinhanvien/views/nhanvien/index.php";
    // }

    public function index()
    {
        $limit = 5;
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        $nhanviens = $this->nhanVienModel->getAll($limit, $offset);
        $totalRecords = $this->nhanVienModel->getTotal();
        $totalPages = ceil($totalRecords / $limit);

        include "quanlinhanvien/views/nhanvien/index.php";
    }


    public function create()
    {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            echo "Bạn không có quyền truy cập!";
            exit();
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->nhanVienModel->create($_POST);
            header("Location: index.php");
        } else {
            include "quanlinhanvien/views/nhanvien/add.php";
        }
    }

    public function edit($id)
    {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            echo "Bạn không có quyền truy cập!";
            exit();
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->nhanVienModel->update($id, $_POST);
            header("Location: index.php");
        } else {
            $nhanvien = $this->nhanVienModel->getById($id);
            include "quanlinhanvien/views/nhanvien/edit.php";
        }
    }

    public function delete($id)
    {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            echo "Bạn không có quyền truy cập!";
            exit();
        }

        $this->nhanVienModel->delete($id);
        header("Location: index.php");
    }

    public function confirmDelete($id)
    {
        include "quanlinhanvien/views/nhanvien/delete.php";
    }

}
?>