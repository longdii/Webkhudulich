<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="http://localhost/WebKhuVuiChoi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/base.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/reponsive.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/ve.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Vé</title>
</head>

<body>
    <!-- http://localhost/WebKhuVuiChoi/Ve_c/suadl -->
    <form action="http://localhost/WebKhuVuiChoi/AmThucVaMuaSam_admin_c/suadl" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        SỬA THÔNG TIN ẨM THỰC VÀ MUA SẮM
                    </span>
                </li>
            </ul>
            <ul class="header-list">
                <!-- <li class="header-item">
                    <button class="header-btn header-btn--export" type="submit" name="btnTroVe">Export</button>
                </li>
                <li class="header-item">
                    <button class="header-btn header-btn--export" type="submit" name="btnTroVe">Import</button>
                </li> -->
                <li class="header-item">
                    <button class="header-btn" type="submit" name="btnTroVe">Back</button>
                </li>
            </ul>
        </div>
        <div class="container">
            <table class="content__table">
                <?php
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($data['dulieu'])) {
                ?>
                <tr>
                    <th>ID</th>

                    <th>Tên Nhà Hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Mô Tả</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="content__table-input" name="txtMaAmThuc" readonly
                            value="<?php echo $row['MaAmThuc'] ?>">
                    </td>

                    <td>
                        <input type="text" class="content__table-input" id="txtTenAmThuc" name="txtTenAmThuc"
                            value="<?php echo $row['TenAmThuc'] ?>">
                    </td>
                    <td>
                        <input type="text" class="content__table-input" id="txtDiaChiAmThuc" name="txtDiaChiAmThuc"
                            value="<?php echo $row['DiaChiAmThuc'] ?>">
                    </td>
                    <td>
                        <input type="text" class="content__table-input" name="txtMoTaAmThuc"
                            value="<?php echo $row['MoTaAmThuc'] ?>">
                    </td>
                </tr>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Chọn ảnh</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <div class="img"
                            style="background-image: url(/WebKhuVuiChoi/Public/images/captreo_img/<?php echo $row['AnhAmThuc'] ?>);">
                            <input type="text" name="txtAnhAmThucCu" value="<?php echo $row['AnhAmThuc'] ?>" hidden>
                        </div>

                    </td>
                    <td colspan="3">
                        Chọn ảnh mới
                        <input type="file" name="txtAnhAmThuc">
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
                <tr>
                    <td>
                        <input type="submit" class="header-btn" name="btnSua" value="Xác nhận">
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <script>
    window.onload = function() {
        document.getElementById("txtTenAmThuc").focus();
    }
    </script>
</body>

</html>