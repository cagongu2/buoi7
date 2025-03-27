<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Thêm nhân viên</h1>
        
        <div class="card shadow p-4">
            <form action="index.php?action=create" method="POST">
                <div class="mb-3">
                    <label class="form-label">Mã NV:</label>
                    <input type="text" class="form-control" name="Ma_NV" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tên NV:</label>
                    <input type="text" class="form-control" name="Ten_NV" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phái:</label>
                    <select class="form-select" name="Phai">
                        <option value="NU">Nữ</option>
                        <option value="NAM">Nam</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nơi Sinh:</label>
                    <input type="text" class="form-control" name="Noi_Sinh">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mã Phòng:</label>
                    <select class="form-select" name="Ma_Phong">
                        <option value="QT">Phòng Quản Trị</option>
                        <option value="TC">Phòng Tài Chính</option>
                        <option value="KT">Phòng Kỹ Thuật</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lương:</label>
                    <input type="number" class="form-control" name="Luong">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Thêm nhân viên</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
