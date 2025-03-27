<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh sửa nhân viên</title>
</head>
<body>
    <h1>Chỉnh sửa nhân viên</h1>
    <form action="index.php?action=edit&id=<?= urlencode($nhanvien['Ma_NV']) ?>" method="POST">
        <label>Mã NV:</label>
        <input type="text" name="Ma_NV" value="<?= htmlspecialchars($nhanvien['Ma_NV']) ?>" readonly>
        <br>
        <label>Tên NV:</label>
        <input type="text" name="Ten_NV" value="<?= htmlspecialchars($nhanvien['Ten_NV']) ?>" required>
        <br>
        <label>Phái:</label>
        <input type="text" name="Phai" value="<?= htmlspecialchars($nhanvien['Phai']) ?>">
        <br>
        <label>Nơi Sinh:</label>
        <input type="text" name="Noi_Sinh" value="<?= htmlspecialchars($nhanvien['Noi_Sinh']) ?>">
        <br>
        <label>Mã Phòng:</label>
        <input type="text" name="Ma_Phong" value="<?= htmlspecialchars($nhanvien['Ma_Phong']) ?>">
        <br>
        <label>Lương:</label>
        <input type="number" name="Luong" value="<?= htmlspecialchars($nhanvien['Luong']) ?>">
        <br>
        <button type="submit">Cập nhật</button>
        <a href="index.php">Hủy</a>
    </form>
</body>
</html>
