<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="/WebKhuVuiChoi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/base.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/reponsive.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/thongke.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Vé</title>
</head>

<body>
    <form action="/WebKhuVuiChoi/ThongKe/thongke" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        THỐNG KÊ DOANH THU
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
            </ul>
        </div>
        <div class="container">
            <div class="content__search">
                <div class="content__search-wrap_left">

                    <div class="content__search-input-wrap">
                        <input type="date" class="content__search-input" placeholder="Ngày bắt đầu" name="txtNgaybd"
                            value="<?php echo $data['ngaybd'] ?>">
                    </div>
                </div>
                <div class="content__search-wrap_right">
                    <div class="content__search-input-wrap">
                        <input type="date" class="content__search-input" placeholder="Ngày kết thúc" name="txtNgaykt"
                            value="<?php echo $data['ngaykt'] ?>">
                    </div>
                </div>

                <div class="content_thongke">
                    <button class="search-btn header-btn--export" type="submit" name="btnthongke">Thống kê</button>
                </div>
            </div>
            <table class="content__table">
                <tr>
                    <th>Tên Vé</th>
                    <th>Số Lượng</th>
                    <th>Doanh Thu</th>
                </tr>
                <?php
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
                    $i = 0;
                    $tong = 0;
                    while ($row = mysqli_fetch_array($data['dulieu'])) {
                        $tong += $row['DoanhThu'];
                ?>
                <tr>
                    <td><?php echo $row['TenVe'] ?></td>
                    <td><?php echo $row['SoLuong'] ?></td>
                    <td><?php echo number_format($row['DoanhThu']) . ' VNĐ' ?></td>
                </tr>
                <?php
                    }
                }
                ?>

            </table>
            <div style="font-size: 20px;margin: 15px 0;text-align: end;"><span
                    style="color: #8f2624;font-weight: bolder;">Tổng doanh thu :</span>
                <?php echo number_format($tong) . ' VNĐ' ?></div>
        </div>
    </form>
</body>

</html>
