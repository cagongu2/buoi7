<?php
require_once "quanlinhanvien/models/User.php";
session_start();


class AuthController
{
    private $userModel;
    private $conn;


    public function __construct()
    {
        $database = new Database(); // Thêm dòng này
        $this->conn = $database->getConnection();
        $this->userModel = new User();
    }

    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $user = $this->userModel->getUserByUsername($username);
            if ($user && password_verify($password, $user["password"])) {
                $_SESSION["user"] = [
                    "id" => $user["id"],
                    "username" => $user["username"],
                    "role" => $user["role"]
                ];
                header("Location: index.php");
                exit();
            } else {
                $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
            }
        }

        include "quanlinhanvien/views/auth/login.php";
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $role = "user"; // Mặc định tài khoản mới sẽ là user

            // Kiểm tra xem username đã tồn tại chưa
            if ($this->userModel->getUserByUsername($username)) {
                $error = "Tên đăng nhập đã tồn tại!";
            } else {
                // Thêm người dùng vào database
                if ($this->userModel->createUser($fullname, $email, $username, $password, $role)) {
                    header("Location: index.php?action=login");
                    exit();
                } else {
                    $error = "Lỗi khi đăng ký!";
                }
            }
        }

        include "quanlinhanvien/views/auth/register.php";
    }


    public function logout()
    {
        session_destroy();
        header("Location: index.php?action=login");
    }
}

?>