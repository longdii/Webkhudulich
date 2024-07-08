<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="/WebKhuVuiChoi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/css/base.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/css/grid.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/css/reponsive.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/css/admin.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Vé</title>
</head>

<body>
    <form action="/WebKhuVuiChoi/Haidang_admin/suadl" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        SỬA THÔNG TIN HẢI ĐĂNG
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
                    <th>Tên trải nghiệm</th>
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
                        <input type="text" id="txtTentn" name="txtTentn" value="<?php echo $row['TieuDe'] ?>">
                    </td>
                    <td>
                        <input type="text" name="txtmota" value="<?php echo $row['MoTa'] ?>">
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
    <!-- <script>
        window.onload = function() {
            document.getElementById("txtTenVe").focus();
        }
    </script> -->
</body>

</html>
