<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="http://localhost/http://localhost/WebKhuVuiChoi/Public/Css/Public/Css/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/base.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/reponsive.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/ve.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Sửa</title>
</head>

<body>
    <form action="http://localhost/WebKhuVuiChoi/TinTuc_admin/suadl" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        SỬA ĐỔI THÔNG TIN TIN TỨC
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
                    <th>Hình ảnh</th>
                    <th>Tên tin tức</th>
                    <th>Mô tả</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="txtID" readonly value="<?php echo $row['ID'] ?>">
                    </td>
                    <td>
                        <div class="img"
                            style="background-image: url(/WebKhuVuiChoi/Public/Images/<?php echo $row['AnhVe'] ?>);">
                            <input type="text" name="txtAnhVeCu" value="<?php echo $row['AnhVe'] ?>" hidden>
                        </div>

                    </td>
                    <td>
                        <input type="text" id="txtTentn" name="txtTenTin" value="<?php echo $row['TieuDe'] ?>">
                    </td>
                    <td>
                        <input type="text" name="txtMota" value="<?php echo $row['MoTa'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        Chọn ảnh mới
                        <input type="file" name="txtAnhVe">
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

</body>

</html>