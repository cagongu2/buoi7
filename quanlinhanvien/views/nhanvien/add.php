<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thêm nhân viên</title>
</head>

<body>
    <h1>Thêm nhân viên</h1>
    <form action="index.php?action=create" method="POST">
        <label>Mã NV:</label>
        <input type="text" name="Ma_NV" required>
        <br>
        <label>Tên NV:</label>
        <input type="text" name="Ten_NV" required>
        <br>
        <label>Phái:</label>
        <select name="Phai">
        <option value="NU">Nữ</option>
        <option value="NAM">Nam</option>
        </select>
        <br>
        <label>Nơi Sinh:</label>
        <input type="text" name="Noi_Sinh">
        <br>
        <label>Mã Phòng:</label>
        <select name="Ma_Phong">
            <option value="QT">Phòng Quản Trị</option>
            <option value="TC">Phòng Tài Chính</option>
            <option value="KT">Phòng Kỹ Thuật</option>
        </select>
        <br>
        <label>Lương:</label>
        <input type="number" name="Luong">
        <br>
        <button type="submit">Thêm</button>
        <a href="index.php">Quay lại</a>
    </form>
</body>

</html>