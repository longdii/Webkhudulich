<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/base.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/reponsive.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/ve.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Vé</title>
</head>

<body>
    <form action="/WebKhuVuiChoi/taikhoanadmin/timkiem" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        TÀI KHOẢN
                    </span>
                </li>
            </ul>
            <ul class="header-list">
                <li class="header-item">
                    <button class="header-btn header-btn--export" name="btnExport">Export</button>
                </li>
                <!-- <li class="header-item">
                    <button class="header-btn header-btn--export" type="submit" name="btnTroVe">Import</button>
                </li> -->
                <li class="header-item">
                    <button class="header-btn" type="submit" name="btnthem">Add</button>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="content__search">
                <div class="content__search-wrap">
                    <div class="content__search-input-wrap">
                        <input type="text" class="content__search-input" placeholder="Nhập để tìm kiếm" name="txtTimKiem">
                    </div>
                    <button class="content__search-btn" type="submit" name="btnTimKiem">
                        <i class="content__search-btn-icon fa-solid fa-magnifying-glass"></i>
                    </button>
                    <button class="content__search-btn" type="submit" name="btnTroVe">
                        <i class="content__search-btn-icon fa-solid fa-rotate-left"></i>
                    </button>
                </div>

            </div>

            <table class="content__table">
                <tr>
                    <th>STT</th>
                    <th>Email</th>
                    <th>Mật Khẩu</th>
                    <th>Họ tên</th>
                    <th>Điện Thoại</th>
                    <th>Địa Chỉ</th>
                    <th></th>
                </tr>
                <?php
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($data['dulieu'])) {
                ?>
                        <tr>
                            <td><?php echo ++$i ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td>********</td>
                            <td><?php echo $row['HoTen'] ?></td>
                            <td><?php echo $row['DienThoai'] ?></td>
                            <td><?php echo $row['DiaChi'] ?></td>
                            <td>
                                <a href="/WebKhuVuiChoi/taikhoanadmin/xoa/<?php echo $row['MaTaiKhoan'] ?>"><i class="content__table-icon fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </form>
</body>

</html>
