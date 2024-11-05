<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý nguyên vật liệu</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/danhsachnvl.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo">
                    <p>logo</p>
                </div>

                <a class="trangChu" href="../../index.php">
                    <h4>Trang Chủ</h4>
                </a>
            </div>
        </div>
    </header>
        <div id="content">
            <div class="container">
                <div class="header-row">
                    <h2>DANH SÁCH NGUYÊN VẬT LIỆU</h2>
                    <div class="search-add">
                        <input type="text" placeholder="Tìm kiếm...">
                        <button class="search-button">🔍</button>
                        <button class="add-button" onclick="window.location.href='bep_themnvl.php';">THÊM MỚI</button>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên nguyên vật liệu</th>
                            <th>SL</th>
                            <th>Đơn vị</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nguyên liệu A</td>
                            <td>10</td>
                            <td>kg</td>
                            <td>Đủ</td>
                            <td>
                                <button class="view-button" onclick="window.location.href='bep_xemnvl.php';">Xem</button>
                                <button class="edit-button" onclick="window.location.href='bep_capnhatnvl.php';">Sửa</button>
                                <button class="delete-button">Xóa</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>