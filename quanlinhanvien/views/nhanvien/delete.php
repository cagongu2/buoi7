<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xác nhận xóa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center text-danger">Xác nhận xóa nhân viên</h2>

        <p class="text-center">Bạn có chắc chắn muốn xóa nhân viên <strong><?= $_GET['id'] ?></strong> không?</p>

        <div class="text-center">
            <a href="index.php?action=delete&id=<?= $_GET['id'] ?>" class="btn btn-danger">Xóa</a>
            <a href="index.php" class="btn btn-secondary">Hủy</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
