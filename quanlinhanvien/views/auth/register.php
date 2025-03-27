<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Đăng ký tài khoản</h2>
        <form action="index.php?action=register" method="POST" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="fullname" class="form-label">Họ và tên</label>
                <input type="text" name="fullname" id="fullname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Vai trò</label>
                <select name="role" id="role" class="form-select">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100">Đăng ký</button>
        </form>
        <p class="text-center mt-3">Đã có tài khoản? <a href="index.php?action=login">Đăng nhập</a></p>
    </div>
</body>
</html>
