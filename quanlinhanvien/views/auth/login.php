<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Đăng nhập hệ thống</h2>
        <form action="index.php?action=login" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <?php if (isset($error)) : ?>
                <p class="text-danger"><?= $error ?></p>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        </form>

        <div class="text-center mt-3">
            <p>Bạn chưa có tài khoản? <a href="index.php?action=register" class="text-decoration-none">Đăng ký ngay</a></p>
        </div>
    </div>
</body>
</html>
