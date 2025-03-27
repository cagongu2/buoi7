<?php
require_once "quanlinhanvien/controllers/AuthController.php";
require_once "quanlinhanvien/controllers/NhanVienController.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$authController = new AuthController();
$controller = new NhanVienController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action === 'login') {
    $authController->login();
} elseif ($action === 'register') { // 👉 Thêm xử lý đăng ký ngay cả khi chưa đăng nhập
    $authController->register();
} elseif ($action === 'logout') {
    $authController->logout();
} else {
    // Kiểm tra nếu chưa đăng nhập thì yêu cầu đăng nhập trước
    if (!isset($_SESSION['user'])) {
        header("Location: index.php?action=login");
        exit();
    }

    switch ($action) {
        case 'create':
            $controller->create();
            break;
        case 'edit':
            $controller->edit($_GET['id']);
            break;
        case 'delete':
            $controller->delete($_GET['id']);
            break;
        case 'confirm_delete':
            $controller->confirmDelete($_GET['id']);
            break;
        case 'login':
            $authController->login();
            break;

        case 'register':
            $authController->register();
            break;

        case 'logout':
            $authController->logout();
            break;
        default:
            $controller->index();
            break;
    }
}
?>