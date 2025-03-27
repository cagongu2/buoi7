<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chỉnh sửa nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Chỉnh sửa nhân viên</h1>

        <div class="card shadow p-4">
            <form action="index.php?action=edit&id=<?= urlencode($nhanvien['Ma_NV']) ?>" method="POST">
                
                <div class="mb-3">
                    <label class="form-label">Mã NV:</label>
                    <input type="text" class="form-control" name="Ma_NV" value="<?= htmlspecialchars($nhanvien['Ma_NV']) ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tên NV:</label>
                    <input type="text" class="form-control" name="Ten_NV" value="<?= htmlspecialchars($nhanvien['Ten_NV']) ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phái:</label>
                    <select class="form-select" name="Phai">
                        <option value="NU" <?= ($nhanvien['Phai'] === 'NU') ? 'selected' : '' ?>>Nữ</option>
                        <option value="NAM" <?= ($nhanvien['Phai'] === 'NAM') ? 'selected' : '' ?>>Nam</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nơi Sinh:</label>
                    <input type="text" class="form-control" name="Noi_Sinh" value="<?= htmlspecialchars($nhanvien['Noi_Sinh']) ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mã Phòng:</label>
                    <select class="form-select" name="Ma_Phong">
                        <option value="QT" <?= ($nhanvien['Ma_Phong'] === 'QT') ? 'selected' : '' ?>>Phòng Quản Trị</option>
                        <option value="TC" <?= ($nhanvien['Ma_Phong'] === 'TC') ? 'selected' : '' ?>>Phòng Tài Chính</option>
                        <option value="KT" <?= ($nhanvien['Ma_Phong'] === 'KT') ? 'selected' : '' ?>>Phòng Kỹ Thuật</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lương:</label>
                    <input type="number" class="form-control" name="Luong" value="<?= htmlspecialchars($nhanvien['Luong']) ?>">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary">Hủy</a>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
