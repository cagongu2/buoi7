<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Hệ thống quản lý</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if (isset($_SESSION["user"])): ?>
                        <li class="nav-item">
                            <span class="nav-link">Xin chào, <?= $_SESSION["user"]["username"] ?></span>
                        </li>

                        <!-- Nếu là admin thì hiển thị menu quản lý nhân viên -->
                        <?php if ($_SESSION["user"]["role"] === "admin"): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=manage">Quản lý nhân viên</a>
                            </li>
                        <?php endif; ?>

                        <li class="nav-item">
                            <a class="nav-link btn btn-danger text-white" href="index.php?action=logout">Đăng xuất</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="index.php?action=login">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-success text-white" href="index.php?action=register">Đăng ký</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-4">
        <h1 class="text-center">Danh sách nhân viên</h1>
        <a href="index.php?action=create" class="btn btn-primary mb-3">Thêm nhân viên</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Mã NV</th>
                    <th>Tên NV</th>
                    <th>Phái</th>
                    <th>Nơi Sinh</th>
                    <th>Mã Phòng</th>
                    <th>Lương</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nhanviens as $nv): ?>
                    <tr>
                        <td><?= $nv['Ma_NV'] ?></td>
                        <td><?= $nv['Ten_NV'] ?></td>
                        <td class="text-center">
                            <?php if ($nv['Phai'] === 'NU'): ?>
                                <img src="https://th.bing.com/th/id/R.f41f699e62e65fa68d963faf7d1f26e8?rik=McqeV6bCGlrkag&pid=ImgRaw&r=0"
                                    alt="Nữ" width="30" height="30" class="rounded-circle">
                            <?php else: ?>
                                <img src="https://th.bing.com/th/id/OIP.vg41yG82qw84ziz5nS-CWQHaHa?rs=1&pid=ImgDetMain"
                                    alt="Nam" width="30" height="30" class="rounded-circle">
                            <?php endif; ?>
                        </td>
                        <td><?= $nv['Noi_Sinh'] ?></td>
                        <td><?= $nv['Ma_Phong'] ?></td>
                        <td><?= number_format($nv['Luong']) ?> VND</td>
                        <td>
                            <?php if (isset($_SESSION["user"]) && $_SESSION["user"]["role"] === "admin"): ?>
                                <a href="index.php?action=edit&id=<?= $nv['Ma_NV'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                                <a href="index.php?action=confirm_delete&id=<?= $nv['Ma_NV'] ?>"
                                    class="btn btn-danger btn-sm">Xóa</a>
                            <?php else: ?>
                                <span class="text-muted">Không có quyền</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

        <!-- Phân trang -->
        <nav>
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                        <a class="page-link" href="index.php?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>