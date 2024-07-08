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
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/ve.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Vé</title>
</head>

<body>
    <!-- http://localhost/WebKhuVuiChoi/Ve_c/suadl -->
    <form action="/WebKhuVuiChoi/PhoCo_admin_c/suadl" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        SỬA THÔNG TIN KIOSL PHỐ CỔ
                    </span>
                </li>
            </ul>
            <ul class="header-list">
                <li class="header-item">
                    <button class="header-btn header-btn--export" type="submit" name="btnTroVe">Export</button>
                </li>
                <li class="header-item">
                    <button class="header-btn header-btn--export" type="submit" name="btnTroVe">Import</button>
                </li>
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
                    <th>Hình ảnh</th>
                    <th>Tên Phố Cổ</th>
                    <th>Mô Tả</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="content__table-input" name="txtMaPhoCo" readonly
                            value="<?php echo $row['MaPhoCo'] ?>">
                    </td>
                    <td>
                        <div class="img"
                            style="background-image: url(/WebKhuVuiChoi/Public/images/captreo_img/<?php echo $row['AnhPhoCo'] ?>);">
                            <input type="text" name="txtAnhPhoCoCu" value="<?php echo $row['AnhPhoCo'] ?>" hidden>
                        </div>

                    </td>
                    <td>
                        <input type="text" class="content__table-input" id="txtTenPhoCo" name="txtTenPhoCo"
                            value="<?php echo $row['TenPhoCo'] ?>">
                    </td>
                    <td>
                        <input type="text" class="content__table-input" name="txtMoTaPhoCo"
                            value="<?php echo $row['MoTaPhoCo'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        Chọn ảnh mới
                        <input type="file" name="txtAnhPhoCo">
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
        document.getElementById("txtTenPhoCo").focus();
    }
    </script>
</body>

</html>
